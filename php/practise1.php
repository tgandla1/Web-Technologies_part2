<!DOCTYPE html>
<html>
<body>

<?php
echo "<p><i>"."\"\"Good morning, Dave,\" said HAL\"."."</i></p>";
?><br><br>


<?php
$rad=8;
$pi=3.14;
$a=$pi*$rad*$rad;
echo("area is =");
echo($a);
?><br><br>

<?php
$fahrenheit=40;
$celsius = ($fahrenheit - 32)*5/9;
echo( "celsius temparature is: ".$celsius);
?><br><br>

<?php
$x= " PHP is fun " ;
$x = preg_replace("/[^A-Za-z]/","",$x);
$s=strlen($x);
echo "String has " . $s . " characters"; 

?><br><br>

<?php
$t="WDWWLWWWLDDWDLL";
$s="WWW";
$p=strpos($t,$s);
$p=$p+strlen($s);
echo "$t[$p]";
 
?><br><br>




<?php
$text="Able was I ere I saw Elba";

$revtext=strrev($text);
if(strtoupper($text)===strtoupper($revtext))
{
	echo " palindrome";
}
?><br><br>










<?php
$num=7;
if($num%2==0)
echo "even";
else
echo "odd";
?><br><br>

<?php
$day  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$leap = date('L',$day);
if($leap)
echo "<b>"." It is"."</b>";
else
echo "<b>"." It isn’t"."</b>";
?>

<br><br>
</html>
</body>