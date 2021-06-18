<?php


echo "ax² + bx + c = 0 <br>";
echo "-3x² + 10x + -3 = 0 <br>";

echo "<br>";

$a = -3; 
$b = 10; 
$c = -3;  

$delta = ($b*$b)-((4*$a)*$c); 
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a); 

echo "<strong>O valor de a é:</strong> ".$a."<br>"; 
echo "<strong>O valor de b é:</strong> ".$b."<br>"; 
echo "<strong>O valor de c é:</strong> ".$c."<br>"; 

echo "<br>";

echo "<strong>O valor de delta é:</strong> ".$delta."<br>"; 

echo "<br>";

echo "<strong>O valor de x1 é:</strong> ".$x1."<br>"; 
echo "<strong>O valor de x2 é:</strong> ".$x2."<br>";


echo "<br>";
echo "<br>";
?>
