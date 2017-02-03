$(document).ready(function(){
	
	$("#username_error_message").hide();
	
	var error_username = false;
	
	$("#form_username").focusout(function() {
		alert("dslk");
		check_username();
	});

	function check_username() {
		var username_length = $("#form_username").val().length;

		if(username_length <5 || username_length > 20) {
			$("#username_error_message").html("Should be between 5-20 characters");
			$("#username_error_message").show();
			error_username = true;

		} else{
			$("#username_error_message").hide();
		}
	}


	$("#registration_form").submit(function()) {
		error_username = false;

		check_username();

		if(error_username==false){
			return true;
		}else {
			return false;
		}
	}
});

