<?php
/*
CRUD - Create, Retrieve, Update at Delete..
First natin is Create.. Gawa muna tyo ng table sa database ntin
meron n tyong table = tbl ang name.. 4 fields. Ung id ang mgiging unique field natin
//Gawin lang antin ung gnw ntin sa form handling
//Para mabilis
//connect tayo sa server at sa database
//Next natin is ung R - Retrieve... 
//Pero iedit muna natin saglit ung C -lgyn lng ntin ng message at bago ntin isave sa table ung data, dapat wala syang error 
*/
$servername = "localhost";
$username = "root";
$pwd = "";
$db ="db_test";

$conn = mysqli_connect($servername,$username,$pwd,$db);

 $fname = $eadd = $addr= $txtid=""; 
 $errfname = $erreadd = $erraddr= $errtxtid=$err=$errsave="";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
	 $err=0;
	 
	 if(isset($_POST["Add"])){
		 //add ang pinindot... Pde natin ilagy nlng ung script n magaad ng data sa table
		if(empty($_POST["fname"])){
			 $errfname ="Pkilagyn ng laman";
			 $err=1;
									}
		else{
				if(preg_match("/^[a-zA-Z ]*$/",$_POST["fname"])){
					$fname = clean_input($_POST["fname"]);
				}
				else{
					$errfname= "letter lang at space";
					$err=1;
				}
		}
		 if(empty($_POST["eadd"])){
			 $erreadd="Pakilagyn ng Laman";
			 $err=1;
								}
		 else{
				if(filter_var($_POST["eadd"],FILTER_VALIDATE_EMAIL)){
					$eadd = clean_input($_POST["eadd"]);
					
				}
				else{
					$erreadd = "Maling email";
					$err=1;
				}
			}
	 if(empty($_POST["addr"])){
		 $erraddr = "Pkilagyn ng laman";
		 $err=1;
								}			
	 else{
		 $addr = clean_input($_POST["addr"]);
	 } 
	 //ayan lang muna para sa C ng CRUD... Upload ko isa isa ung file para nd kayo malito kung para saan at ano ang gmit ng mga inilagy ntin. Salamat (^__^)
	 if($err==0){
	  $q = mysqli_query($conn,"Insert into tbl(fld_name,fld_email,fld_address)
	  VALUES('". $fname ."','". $eadd ."','". $addr ."')");
	  $errsave ="New Record Saved";
				}
	 }
	 else if(isset($_POST["Update"])){
		 echo "Update ang pindot";
	 }
 }
 function clean_input($linis){
	$linis = stripslashes($linis);
    $linis = htmlspecialchars($linis);
    return $linis;	
}
?>


<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

	<table border=0>
	<tr>
			<td>ID:</td> 
			<td><input type="text" name="txtid" value="<?php echo $txtid; ?>" readonly></td>
			<td><?php echo $errtxtid; ?></td> 
		</tr>
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
			<td colspan="3" align="center"><input type="submit" value="Add" name="Add">
			<input type="submit" value="Update" name="Update">
			<!-- Dalawa ung submit button ntin. isa para sa add at isa para sa update-->
			</td>
		</tr>	
	</table>
</form>
<!-- dito ntin ididisplay ung data -->
<table border="0">
  <tr> <th colspan="4" style="text-align:center"> Table Data </th></tr>
  <tr> <th>ID</th>
	   <th style="width:200px">Name</th>
	   <th style="width:200px">Email</th>
	   <th style="width:200px">Address</th>
	   <th style="width:200px">Option</th>
	   </tr>
	
  <?php
     $q = mysqli_query($conn,"select * from tbl");
	 while($r = mysqli_fetch_array($q)){
		 echo "<tr><td>" . $r["id"] . "</td>".
		           "<td>". $r["fld_name"] ."</td>".
				   "<td>". $r["fld_email"]."</td>".
				   "<td>". $r["fld_address"]."</td>".
				   "<td>Edit | Delete </td></tr>";
		 
	 }
	 //parang ayaw iadd.. Ayun ndoble.. Ahahahha
	 //Yun lng para sa R- retrieve ng CRUD. Upload ko sya at itest nyo at pagaraln. Salamat (^__^)
  ?>
</table>
</body>
</html>





