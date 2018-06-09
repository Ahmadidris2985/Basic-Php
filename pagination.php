<?php
$servername = "localhost";
$username = "root";
$pwd = "";
$db ="db_test";

$conn = mysqli_connect($servername,$username,$pwd,$db);
?>
<center>
<table border="0">
  <tr> <th colspan="4" style="text-align:center"> Table Data </th></tr>
  <tr> <th>ID</th>
	   <th style="width:200px">Name</th>
	   <th style="width:200px">Email</th>
	   <th style="width:200px">Address</th>
	   <th style="width:200px">Option</th>
	   </tr>
	
  <?php
/*
Next is pagination. Gagamitin ntinung limit at offset and yung get method.
Gagawa lang tyo ng pinasimpleng pagination. 123 n paging
*/
$limit = 2;//2 record per page ang lalabas
//kukunin ntin ung page number
if(isset($_GET["page"])){
	$page = $_GET["page"];
}
else{
$page = 1;
}
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM tbl LIMIT $start_from,$limit";  

     $q = mysqli_query($conn,$sql);
	 while($r = mysqli_fetch_array($q)){
		 echo "<tr><td>" . $r["id"] . "</td>".
		           "<td>". $r["fld_name"] ."</td>".
				   "<td>". $r["fld_email"]."</td>".
				   "<td>". $r["fld_address"]."</td>".
				   "<td>Edit | Delete </td></tr>";
		 
	 }
	
  ?>
</table>
<?php
/*
next . Gawin ntin ung href or link ng pages
kunin muna ntin ung total number of records n meron sa table, then hahatiin ntin
*/
$sql = "select * from tbl";
$r = mysqli_query($conn,$sql);
$total_records = mysqli_num_rows($r);
$total_pages = ceil($total_records / $limit);
$pagelink = "<div class='pagination'>";
   for($i=1;$i<=$total_pages;$i++){
	   $pagelink .="<a href='pagination.php?page=" . $i ."'> " . $i ."</a>";
   }
   echo $pagelink . "</div>";
   /*
   So ung lang para sa basic pagination. Iupload ko nlng ung file para matest nyo at mas mapagaralan. Salamat (^__^)
   */
?>






