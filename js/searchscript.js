
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});


/*  
$("#submitslotdatabtn").click(function() 
    {
  
      function submitdata() 
      {
      var no_beds, no_slots;
      no_beds = document.getElementById("no_beds");
      no_slots = document.getElementById("no_slots");


      alert('ghjkl');
      
      $.ajax({
          type:"POST",
          url: "submitslotdata.php",
           data : {
                   no_slots : 'no_slots' ,
                   no_beds : 'no_beds' // will be accessible in $_POST['data1']
                  },
          datatype: "json",
          
          success: function(msg){
                                       //console.log(msg);
                                  var y =JSON.parse(msg);
                                  $('#slotdatasubmitted').html(y.slotdatasubmitted);
                                  
                                }

              }
            }  
    });
*/

// Search data by student No
	function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

//Search data by student name
	function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}