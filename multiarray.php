<?php
/*
Next is ung multidimensional array.. Array of arrays or array of array of arrays kung twgin. Gawa tyo ng Simpleng sample
*/

$letra = array();//declare tyo ng variable

$letra[0][0]= "A";
$letra[0][1]= "B";

$letra[1][0]= "C";
$letra[1][1]= "D";

$letra[2][0]= "E";
$letra[2][1]= "F";

//ganyn lang ung pagllgy ng data sa isang multidimensional array.. Ung ung bracket ay row at ung pangalawa ay ung column.. TRy ntin idisplay

//echo $letra[1][0];//Dapat leter C ang llabs
//echo "<br/>" . $letra[2][1];//Dapat leter F ang llabs

//display ntin lahat

?>
<pre>
<?php print_r($letra); ?>
</pre>
<?php
//gmitin ntin ng for loop
//row at col nlng ggmitn ntin para mas mkita nyo 
for($row=0;$row<3;$row++){
	for($col=0;$col<2;$col++){
		echo "Array: " .$row ."," . $col . " = " . $letra[$row][$col] . "<br/>"; 
	}
}
?>

<?php
//pde nyo tin lgyn ng name ung row at column

$tao = array();//declare tyo ng variable

$tao[0]["firstname"]= "A";
$tao[0]["surname"]= "B";

$tao[1]["firstname"]= "C";
$tao[1]["surname"]= "D";

$tao[2]["firstname"]= "E";
$tao[2]["surname"]= "F";

echo $tao[2]["firstname"];//dpt llbs ay letter E
//Yun lng pra s basic multidimensional array.. Upload ko ung file pra mtest at mds mpgaraln nyo. Salamat(^__^)

//nlimutan ko.. Hindi nyo pde gmitin to. Kelngn ilgy ung name ng col.. Un lang... 
for($row=0;$row<3;$row++){
	
		echo "Array: " .$row . " = " . $tao[$row]["firstname"] . "<br/>"; 
	
}
?>





