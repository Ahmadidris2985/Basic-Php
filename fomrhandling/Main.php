<?php
/*
Next is form handling. Magsesend tyo ng data or magcocollect ng data form sa isang page papunta sa isa pa. May 2 way. 
Una is ung paggmit ng GET then ung pangalawa is ung paggamit ng POST.. YUng difference nila ay nasa description ng video. For your reference... 
So ngyon, ggw tyo ng 2 file. Una is ung main.php- andito ung form at sya ung magsesend ng data. Pangalawa is ung collect.php.. Sya ing pupuntahan o pagsesendan ng data ni main.php at sya rin ang magcocollect.
*/
?>

<html>
<body>
<!-- dito sa form may method. POST or GET. Try muna ntin ung post. Then may action. Ung action is certain or specific page

Kayo n ang magdesign ng sample--
Next is yug collect.php-->
<form action="collect.php" method="get">
Username: <input type="text" name="fname"><br>
Password: <input type="text" name="lname"><br>
<input type="submit">
</form>

</body>
</html>