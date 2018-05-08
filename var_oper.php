<?php
//variables
//Arithmetic operators: + - * / % **
//Assignment operators: = += -= *= /= %=
//Increment/Decrement operators: ++var var++ --var var--

//case sensitive ang paggamit ng variable
$x = 2;
$y = 8.75;
$z="ABC";
$A=0;

echo $x;
echo "<br/>Two var:" . $x . " , " . $y;
echo "<br/>" . $x . " , " . $y . " , " . $z;
//basic arithmetic na add minus multiply divide mod at exponent

	$A = $x + $y;
echo "<br/>Operator +: " . $A;
	$A = $x - $y;
echo "<br/>Operator -: " . $A;
	$A = $x * $y;
echo "<br/>Operator *: " . $A;
	$A = $x / $y;
echo "<br/>Operator /: " . $A;
    $x = 14;
    $y = 5;
	$A = $x % $y;
echo "<br/>Operator %: " . $A;
	$x = 2;
    $y = 4;
	$A = $x ** $y;//(2x2x2x2)
echo "<br/>Operator **: " . $A;
//Assignment operators: = += -= *= /= %=
	$A = $x;
echo "<br/>Assignment Operator =: " . $A;
		$x = $x;
//parehas lang ng $x = $x + $y;
//parehas lang ng $x = $x - $y;
//parehas lang ng $x = $x * $y;
//parehas lang ng $x = $x / $y;
//parehas lang ng $x = $x % $y;
//echo "<br/>Assignment Operator +=: " . $A;

//Increment/Decrement operators: ++var var++ --var var--
//dito sa ++var.. Add muna ng 1..

	$x = 3;
echo "<br/>x: " . $x;
echo"<br/>++x:" . ++$x; //Add one tpos pag echo llbas ung new value
//dito sa var++..
	$x = 9;
echo "<br/>x: " . $x;
echo"<br/>++x:" . $x++; //echo ung x pero nd lalabas ung new value;
echo "<br/>new x: " . $x;


?>






