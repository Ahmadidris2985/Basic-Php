<?php
//If elseif else.. or if elseif elseif.... else...
$mid = 73;
$fin = 73;
$ave = ($mid + $fin)/2;

//gawin lang natin ulit ung sa if else
//ung ave is... 85.. so passed sya..
//ave is 70.. failed.
//halimbawa ung mga conditional... ave = 74 ay conditional
if($ave>74){
   echo "Passed";
     //ave is 74.. False dito sa hindi ieexecute
           }
elseif ($ave==74){
		echo "Conditional";
	 //ave is 74. True dito so ito ang ieexecute nya
				}
elseif($ave==73){
		echo"73 n average";
				}				
else{
	echo "Failed";	
	//ave is not greater than 74 pero equal sa 74. Dun s else if ang 
	//execute hindi sa else
	}	
//yan ang if elseif else..
//If you want n may isa pang conditon n elseif, pde naman. Halimbawa
//Ayun lang.. Sorry sa mga typo..(^__^) Maraming salamat. Ung code, nakaupload n if you want n gamitin at paglaruan o itest sa inyong sariling xampp. Salamat
?>




