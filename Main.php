<?php
/*
Ngayon gawin ntin ung form handling pero isesend sa sariling page tpos gmitin ntin ng konting security para iwas sa mga tintwg n sql injection.
Gagamit tyo ng:
- if else
- empty = para icheck if may laman o wala
- preg_match = para isearch sa isang pattern
- stripslashes = para alisin ang mga slashes
- htmspecialchars = para alisin o tignan if may kasama n harmful html
- request_method = para mlmn if post or get_browser
- php_self = isend sa sariling page o sariling
- filter_validate_email = para icheck if tama b o email ba ang input.

Mukhang may mali sa ibang term... Pkitignan sa description. Salamat
*/
 //declare muna tyo ng variable
 $fname = $eadd = $addr=""; 
 $errfname = $erreadd = $erraddr="";
//try ntin lgyn ng laman ung addr
//So pgkasubmit.. Pupunt ulit dito.
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//kunin natin isa isa ung text. Pag walang lamn o invalid ilalabas ntin ung error message
	     if(empty($_POST["fname"])){
			 $errfname ="Pkilagyn ng laman";
									}
		else{
				if(preg_match("/^[a-zA-Z ]*$/",$_POST["fname"])){
					//ung preg_match ang nagsearch sa pattern if tama ba ung input based dun sa pattern. Pde din kyo gumwa ng sarili nyong pattern. 
					$fname = clean_input($_POST["fname"]);
				}
				else{
					$errfname= "letter lang at space";
				}
		}
		 if(empty($_POST["eadd"])){
			 $erreadd="Pakilagyn ng Laman";
								}
		 else{
				if(filter_var($_POST["eadd"],FILTER_VALIDATE_EMAIL)){
					$eadd = clean_input($_POST["eadd"]);
					
				}
				else{
					$erreadd = "Maling email";
				}
			}
	 if(empty($_POST["addr"])){
		 $erraddr = "Pkilagyn ng laman";
								}			
	 else{
		 $addr = clean_input($_POST["addr"]);
	 } 
      }
//So ayun ung sa form self email validate empty preg match. Ifilter ngyon ntin ung mga input.. Alisin ung possible injection or harmful code n sinsb

function clean_input($linis){
	$linis = stripslashes($linis);
    $linis = htmlspecialchars($linis);
    return $linis;	
}	  

/*
 Yun lang.. Pkita ko sa isang video ung mga sample n injection or harmful code. UNg mga basic.. Para mas maapreciate nyo ung paggmit ng mga stripslashes at htmlspecialchars sa code nyo.. Ung file ay iuupload ko nlng para matest nyo at mas mpagaralan nyo. 
 Salamat (^__^) dami typo.. 
*/
?>

<html>
<body>
<!-- Need ntin plitan ung sa action... Dapat sa srili nya pumunta. Pde nmn ilagy at Main.php, Pero dahil iiwasan ntin ung sql injection ggmit tyo ng htmlspecialchars-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<!-- N test n ung submit, s sarili nya pumunta then post ang gnmit ntin. Ung mga text, pde ntin ilgy ung value n ininput ntin.-->
	<table border=0>
		<tr>
			<td>Name:</td> 
			<td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
			<td><?php echo $errfname; ?></td> 
		</tr>
		<tr>
			<td>Email:</td> 
			<td><input type="text" name="eadd" value="<?php echo $eadd; ?>"></td>
			<td><?php echo $erreadd; ?></td> 
		</tr>
		<tr>
			<td>Address:</td> 
			<td><input type="text" name="addr" value="<?php echo $addr;?>"></td>
			<td><?php echo $erraddr; ?></td> 
		</tr>
		<tr> 
			<td colspan="3"><input type="submit" value="I-Submit"></td>
		</tr>	
	</table>
</form>

</body>
</html>