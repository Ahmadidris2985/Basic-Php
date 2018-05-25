<?php
/*
Next is array...

*/
//$newarr = array();// ganyan lng ang pagdedeclare ng array.. Wala p syang laman.
$mobarr = array("Apple" , "Blu","HTC","Nokia","Samsung","Alcatel");
//may array tyo n mobarr... I echo natin sya

echo $mobarr[0];//lalabas ay apple
echo "<br/>" . $mobarr[4] ."<br/>";//lalabas ay samsung
//ung number ay naintindihan nyo kung para saan? Un ung index number sa loob ng array.

//ngyon gmitin natin yung isang type ng loop

foreach($mobarr as $mobile){
	
	echo "Mobile model: " . $mobile . "<br/>";
}

//Yun lang para sa basic array. Ung file iuupload ko para matest nyo at mas mapgaraln. Salamat (^__^) 
?>





