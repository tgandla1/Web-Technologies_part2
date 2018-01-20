<!DOCTYPE html>
<html>
<body>

<?php
echo "<p><i>"."“Good morning, Dave,” said HAL."."</i></p>";
?>


<?php
$rad=8;
$pi=3.14;
$a=$pi*$rad*$rad;
echo("area is =");
echo($a);
?>

<?php
$fahrenheit=40;
$celsius = ($fahrenheit - 32)*5/9;
echo( "celsius temparature is:".$celsius);
?>

<?php
$x= " PHP is fun " ;
$x = preg_replace("/[^A-Za-z]/","",$x);
$s=strlen($x);
echo "String has" .$s. "characters"; 

?>

<?php
$t="WDWWLWWWLDDWDLL";
$l="WWW";
$search=strpos($t,$l);
$search=$serach+strlen($l);
echo "$t[$search]";

?>


<?php
$x='aca';
$y=strrev($x);
echo strcmp($x,$y)

?>


<?php
$p= array("kayak", "Hannah",  "Able was I ere
I saw Elba");

for($i=0;$i<3;$i++)
{
$y=strrev($p[i]);
echo strcmp($p[i],$y);
}

?>










<?php
$num=7;
if($num%2==0)
echo "even";
else
echo "odd";
?>


<!DOCTYPE html>
<html>
<body>
<?php
$x=date("Y/m/d");

if($x%4==0)
echo "<b>" .it is."</b>;"
else
echo "<b>" .it isn't."</b>";


?>
</html>
</body>