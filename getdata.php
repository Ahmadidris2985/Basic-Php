<?php


$servername = "localhost";
$username = "root";
$pwd = "";
$db ="db_test";

$conn = mysqli_connect($servername,$username,$pwd,$db);

//ito ung getdata.php

$q = $_GET["q"];

//gagamit tyo ng like sa condition

$q = mysqli_query($conn,"select * from tbl where fld_name like '%". $q ."%'");
echo "<table>";
echo "<tr><td> Name </td>";
echo "<td>Email </td>";
echo "<td> Address </td></tr>";


while($r = mysqli_fetch_array($q)){
	echo"<tr><td>" . $r["fld_name"] . "</td>";
	echo "<td>" . $r["fld_email"] ."</td>";
	echo "<td>". $r["fld_address"] ."</td></tr>";
	
}
echo "</table>";

/*
Yung condition ay naghhnp sa fld_name. Pde nyo plitan or dagdagan ng condition sa statement.
Upload ko ung 2 file, getdata at ung ajaxsearch para matest nyo at mas mapagaralan. Yun lang at Salamat (^__^)
*/
?>


