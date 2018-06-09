<?php
//dito pupunt after msubmit sa main.php
//Tignan nyo ung text sa main.php. Dapat may name ang bawat form object
//So merong ipapasa si main.php n object n may name n fname at lname
//Dahil POST ang ginmit sa method, POST ang ggmitin natin

//ung nkikita nyo n unag fname sa kliwa ay variable lang, pde nyo plitan. Ung nkikita nyo n fname sa loob ng [] ay name ng object. Nd nyo pdeng plitan dito, pero pde plita sa pinangglingan o ngsend..
//Yan ang POST... Gmitin ntin ang GET
/*
$fname  = $_POST["fname"];
$lname = $_POST["lname"];

echo "Hello " . $fname ." , " . $lname;
*/
//Parang parehas lang.. Pero sa get ang lht ng data n nillgy o isesend nya ay nilalagy sa url. Halimbawa sa gnw ntin.. fname ay Mhark tpos ung lname ay ryuk
//http://localhost/Sample/collect.php?fname=Mhark&lname=Ryuk
//Ayan ung URl... Kung titignan nyo anjn ung name ng text at laman ng text
//Kadalasan pag nagsusubmit ng information sa form, POST ang gngmit. Bakit? Ito ung sample... Pinlitan ko ung sa form.. Username at password.. Ang password, plitan lang ung type.. 
//Ung url n nreceive o lumbas ay
//http://localhost/Sample/collect.php?fname=Usernameko&lname=Secretpassword

//So lumbas din sa url ung password nyo.. 
//Kaya madalas ang ginagmit ay POST sa mga data form submit.. Pero gngmit nmn din ang GET... Sa ibang video mkikita nyo n get ang ggmitin ntin. 

$fname  = $_GET["fname"];
$lname = $_GET["lname"];
if(!filter_var($fname ,FILTER_VALIDATE_EMAIL)){
	echo "not email";
}
 if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      echo "Only letters and white space allowed"; 
    }
//echo "Hello " . $fname ." , " . $lname;
//Yun lang muna para sa Basic Form Handling. YUng 2 file, iupload ko para matest at mas mapgaraln nyo. Salamat (^__^)

?>



