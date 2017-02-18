<!DOCTYPE html>
<html>
<head>
	<title>Admin Slot Allotment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/searchscript.js"></script>
    <script type="text/javascript">
	
	/*function allotslotfunc() 
    {
      
      $.ajax({
          	type:"POST",
          	url: "slotallot.php",
          	datatype: "json",
            success: function(msg)
                                 {
                                  var y = JSON.parse(msg);
                                  $('#slotallotted').html(y.slotallotted);
                                }

              
            });
   }*/

   function allotslotfunc() 
        {
           var ajaxRequest;  
          
           
                         
           try {
            
              ajaxRequest = new XMLHttpRequest();
           }catch (e) {
              
              try {
                 ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
              }catch (e) {
                 try{
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                 }catch (e){
                   
                    
                    return false;
                 }
              }
           }
                      ///////////////////////////////////////////////////yha POST lga kr dekho zara
         
           ajaxRequest.open("GET", "slotallot.php", true);
           ajaxRequest.send(null);

           ajaxRequest.onreadystatechange = function(){
              if(ajaxRequest.readyState == 4)
              {
                document.getElementById('slotallotted').innerHTML = ajaxRequest.responseText;
                 
                // alert(ajaxRequest.responseText);
               }
           }
           
       }
    </script>


</head>
<body>

<div id="slotallotted">

    <label>Click To Generate Slots</label>
	<input type="submit" name="allotsubmit" id="slot_allot_submit" onclick="allotslotfunc();">
</div>

</body>
</html>