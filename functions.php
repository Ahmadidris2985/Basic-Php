<?php
/*
Next natin is function.
Ung function is blocked of statements or script n pdeng twagin paulit ulit. Ung php ay mga functions, pero ggw tyo ng sarili nting function.
Ung function n ggwin natin ay nd maiimplement o maeexecute o matritrigger unless tawagin natin.
*/
//Walang outout n lumabas, khit may nkikita kayong echo. Nasa loob kasi sya ng function. Nd p ntin tintwgn. 

function sampleOut(){
  echo "sample function text <br/>";
}

sampleOut();//ito ung pantwag. Write nyo lang ung function name.
//Gaya ng sinab ko. Pde syang twgin ng paulit ulit.
sampleOut();
sampleOut();
sampleOut();
sampleOut();
sampleOut();
//6 times ko sya nilagy o tinwag so 6 times din ttgwin o ggwin ung statement sa function.

//Next is ung function n may parameter.

//fvar stand for first variable.. Ung parameter name, kayo ang bhl kung anong name. Bsta valid ang parameter name
function samplewithpara($fvar,$svar){
   //ggwin ntin ay ieecho ang laman ng fvar and svar	
   echo $fvar ." ". $svar;
}

samplewithpara("Ahmad","Idris");//Ganyn lng ung may parameter
//samplewithpara("Ahmad");//error kasi tinwg ung function n need ng 2 parameter o value n dapat isend pero isa lang ung meron..
//Next is ung may default n value ung parameter
echo "<br/>";
function paramdefa($valdef = 100){
	echo $valdef . "<br/>";
}

paramdefa(50);
paramdefa(10);
paramdefa(5);
paramdefa();//nung tinwag ung function then wala syang isinama n value. ung function n tintwag ay ginmit ung default n value n nkadeclare.
paramdefa(34);

//Next sample ng function natin 
echo "<br/>";
function dotheoper($fvar,$svar,$oper){
	if($oper=="+"){
		$z = $fvar + $svar;
		return $z;
	}
	else if($oper=="-"){
		$z = $fvar - $svar;
		return $z;
	}
	
}

echo "3 + 4 = " . dotheoper(3,4,"+");
echo "<br/> 9 - 1 = " . dotheoper(9,1,"-");//walang output n lumbas kasi kulang p ung statement sa loob ng function

//Ayun lang muna para sa Basic PHP function.. Uung file, upload ko nlng para masubukan nyo at matest nyo sa unit nyo at mapagaralan nyo. 
//Salamat (^__^)
?>















