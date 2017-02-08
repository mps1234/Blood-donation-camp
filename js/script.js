$(document).ready(function(){
	
	$("#student_no_error").hide();
	$("#student_name_error").hide();
	$("#contact_email_error").hide();
	$("#contact_no_error").hide();
	
	var error_studentno = false;
	var error_studentname = false;
	var error_contactemail = false;
	var error_contactno = false;
   
    //function to check existing records
    function check_userrecord()
       { 

       	    var studentno = $('#student_no').val();
       	    $('#student_no').val("");
            $('#student_name').val("");
            $('#contact_email').val("");
            $('#contact_no').val("");
               
       	    //alert(studentno);
            $.ajax({
          	type:"POST",
          	url: "userrecord.php",
          	data: "studentno="+studentno,
          	datatype: "json",
          	success: function(msg){
          		//console.log(msg);
          		var student =JSON.parse(msg);
          		//$('#result').html(student.student_no_return);
          		$('#recordsfound').html(student.recordsfound);
               
          		$('#student_no').val(student.student_no_return);
                $('#student_name').val(student.student_name_return);
                $('#contact_email').val(student.email_return);
                $('#contact_no').val(student.contact_no_return);
               }

          });
       } 

       //function for sorting data
        function sortlist()
       { 
       		alert('Data Sorted as per the conditions');
            $.ajax({
          	type:"POST",
          	url: "../admin/sort.php",
          	datatype: "json",
          	success: function(msg){
          		//console.log(msg);
          		var x =JSON.parse(msg);
          		$('#sortbutton').html(x.sorted);
          		//$('#result').html(student.student_no_return);
          		
               }

          });
       }

	//function for student no. validation
	function check_studentno() 
		{

		var studentno_length = $("#student_no").val().length;
		if(studentno_length < 7 || studentno_length > 8) 
				{
			$("#student_no_error").html("Invalid student no");
			$("#student_no_error").show();
			error_username = true;
				} 
		else
			{
			$("#student_no_error").hide();
			}
		}

	//function for student name validation
	function check_studentname(){
		var student_pattern = new RegExp(/^[a-zA-Z\-'\s]+$/);
		if(student_pattern.test($("#student_name").val())) {
			$("#student_name_error").hide();
		}
		else{
			$("#student_name_error").html("Invalid student name");
			$("#student_name_error").show();
			error_studentname = true;
		}

	}

	//function for email validation
	function check_studentemail(){
		var email_pattern = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
		if(email_pattern.test($("#contact_email").val())) {
			$("#contact_email_error").hide();
		}
		else{
			$("#contact_email_error").html("Invalid Email Id");
			$("#contact_email_error").show();
			error_contactemail = true;
		}

	}

	//function for contact no validation
	function check_contactno(){
		var contact_pattern = new RegExp(/^(([0-9]{10,11}))$/);
		if(contact_pattern.test($("#contact_no").val())) {
			$("#contact_no_error").hide();
		}
		else{
			$("#contact_no_error").html("Invalid Contact No");
			$("#contact_no_error").show();
			error_contactno = true;
		}
	}

	$("#student_no").focusout(function() 
		{
			check_studentno();
		});

		$("#student_no").focusout(function() 
		{
			check_userrecord();
		});

	$("#student_name").focusout(function() 
		{
			check_studentname();
		});

	$("#contact_email").focusout(function() 
		{
			check_studentemail();
		});

	$("#contact_no").focusout(function() 
		{
			check_contactno();
		});
    
    $("#sortbutton").click(function() 
		{
			sortlist();
		});

	$("#registration_form").submit(function() 
		{
		error_studentno = false;
		error_studentname = false;
		error_contactemail = false;
		error_contactno = false;

		check_studentno();
		check_studentname();
		check_studentemail();
		check_contactno();

		if(error_studentno==false && error_studentname==false && error_contactemail==false && error_contactno==false){
			return true;
		}else 
		{
			return false;
		}
	});
});

