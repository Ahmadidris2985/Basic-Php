<?php
/*
Next is loop. While at do While..
Yung loop ay tinatwag din n iteration. Gingamit ang loop para iimplement o iexecute ang ilng lines o line ng code ng ilang ulit o beses... Simulan ntin sa while

Explain ntin saglit. May variable n ctr =1 tpos my condition sa while n kelangan maging false para hindi n umikot pa sa while loop.
ctr =1.. ctr b ay less than sa 4? True.. echo nya ung value ng $ctr tpos
dahil ndgdgn ng one.. ctr =2. tanong ulit sya if less than ba sa 4.
True.. kaya echbo ung laman ng ctr then increment ng one.
ctr = 3.. Question ulit.. less than b sa 4? True... echo ung laman ng ctr then increment ng one.
ctr = 4.. Question ulit.. Less than b sa 4? False... So hindi n mag eecho at hindi n iikot sa loop.

Para umikot sa loop kelngan lging true ang nasa condition. Pero may definite time o times lang para hindi mclassified as infinite loop ung gnw nyo.
*/

$ctr = 1;

while($ctr < 4 ){
	echo $ctr . "<br/>";
	
	$ctr++;
	//increment ng one. Nadiscuss n natin ung operator n ++.
}

//Next is do while

echo "<hr>";

$ctr = 4;
	do{
		echo $ctr . "<br/>";
		$ctr++;
	}while($ctr<4)
/*
 parang gnun din db.. Parang walang pingkaiba sa while ang do while..
 Pero.. Kagay ng nkita nyo, nprint o lumbas ung 4. Bkit? Kasi sa do while implement o execute ang code sa loob ng loop then magaask ng condition. Unlike sa while.. Condition muna bago implement ng code.
 
 Yan lang muna para sa basic php while and do while. Ung code iuupload ko nlng para mtry nyo at mas mpgaralan. Salamat (^__^)
 
*/		
?>