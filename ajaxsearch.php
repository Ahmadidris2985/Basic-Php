<html>
<head>
<?php
/*
Ajax search... Search tyo ng data sa table then display ntin sa page without refreshing the page.
Gagamit tyo ng javascript.. xmlhttp. readystate, status, get, responsetext


*/
?>
<script>
   function searchdata(str){
	   
	   if(str.lenght==0){
		   document.getElementById('txtdata').innerHTML = ""; // if walang laman ung text o str
	   }
	   else{
		   var xmlhttp = new XMLHttpRequest();
		     xmlhttp.onreadystatechange = function(){
				 if(this.readyState == 4 && this.status == 200){
					 //YUng ready at ung status ay nasa description bkit 4 at ok o 200 ang dpat n nasa condition
					document.getElementById('txtdata').innerHTML = this.responseText; 
				 }
			 }
		xmlhttp.open("GET","getdata.php?q=" + str , true);
		 //pupunta o isesend sa getdata.php then may variable n q
        xmlhttp.send();		
	   }
   }
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="searchdata(this.value)">
</form>
<p><span id="txtdata">Output Search </span></p>
</body>
</html>