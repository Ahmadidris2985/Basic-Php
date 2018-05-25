<?php
/*
sunod natin ay switch.
Dun nga pala sa if elseif else. Pde kayo mglgy ng marming elseif. Halimbawa
if(condtion){ code }
elseif(condition) { code }
elseif(condition) { code }
elseif(condition) { code }
elseif(condition) { code }
..
...
....
else{ code } 
Pde yan
So.. Switch nmn tyo.. Ung switch ay para if elseif elseif.. else din. Kaya lang iba ng itsura ng paggmit. Halimbawa
Ayaw magstart ng apache.. Maraming way para magstart o ayusin. Ito ung isa sa way..OK na.. Sa ibang video ko nlng ipliwng ung Listen 443.. Ngyon e sa switch muna tayo.
*/

$ltr ="Z";

switch($ltr){
	case "A":
		echo "Letter A";
		break;
	case "B":
		echo "Letter B";
		break;
	case "C":
		echo "Letter C";
		break;
	default:
		echo "Wala sa mga case";
		break;
}
/*
  ang lumbas s page ay Letter A. Gaya ng sabi ko ang switch ay parang i elseif elseif... else.
  ang laman ng variable n ltr ay A. Kung s if condition..
  If($ltr=="A")... ganyan.. Dahil true ang condition n yan.. Execute ang code o implement ang code n nasa loob ng if.. Sa sample ntin n switch.. Case "A".... True,, implement ang code n nasa loob ng case "A". Try ntin bguhin ang value ng variable n ltr
  wag nyo nga pala kalimutan ang break sa loob ng o bago kayo ng mdeclare ng pnibagong case o default.
  Ung default ay parang else sa if else.... Kung walang naging true sa mga cases..Papasok agad at iimplement ang code sa loob ng default..
  Gaya ng if elseif elseif.. else n pdeng madming elseif.. sa switch pde ding madming case.
  
  switch(var){
	case 1:
	      code
		  break;
	case 2:
	      code
		  break;
	case 3:
	      code
		  break;		  
	case 4:
	      code
		  break;
	....
	......
	case 10:
	      code
		  break;
	default:
		code
		break;
  }
  Yan, pde din ganyn..
  Yun lang para sa basic switch.
  Again, pasensya s mga typo... Ung file if need nyo para mas mpgaaralan p at matest nyo, iuupload ko at ibibgay ang link.
  Salamat (^__^)
  */



?>





