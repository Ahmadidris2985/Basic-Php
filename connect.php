<?php
//Sunod ay PHP and mysql.
//Connect tyo sa server then ggw ng database 
//Sa pgconnect ntin at pggw, ggmitin natin ay yung mysqli then procedural nd ung object oriented.
//localhost/phpmyadmin - dito mkikita nyo din yung list of database na meron kayo
//sa pagconnect sa server kelngan ntin ng tatlong info

$servername = "localhost";
$username = "root";
$pwd = ""; //double quote lang if wala kayong password

$conn = mysqli_connect($servername,$username,$pwd);//wala nmn lumbas n khit ano so ok p sya
//so ayan nag pgconnect.. gawa tyo ng database- Db_Test
if(!$conn){
	die("cannot connect");
	//die - parang exit... Tpos print o echo nya ung nasa loob nya.. 
}
else{
	echo "connected <br/>";
	$sql = "CREATE DATABASE Db_Test";
	//$q = mysqli_query($conn,$sql);
	//database is created..
}
///Ngayon.. Try ntin kumonek sa server at sa database

$db = "Db_Test";
$conn = mysqli_connect($servername,$username,$pwd,$db);

if(!$conn){
	die("Cannot connect to the database");
}
else{
	echo "Connected to the database: " . $db;
}
// Kung ayaw nyo gumwa ng database using php pde nmn kyo gumwa mismo sa localhost/phpmyadmin
//Gnun lang..
//Yun lang para sa mysqli server connection at database connection - procedural
//YUn file ay iuupload ko para patest at mas mapagaraln nyo. Salamat(^__^) 
?>





















