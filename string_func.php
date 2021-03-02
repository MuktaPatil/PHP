<?php

$txt = " Java,PHP and C are some programming languages";
echo strlen($txt);

echo "<br>";
echo str_replace("PHP","Cpp",$txt);

echo "<br>";
$x = str_split($txt,2);
echo implode(" ",$x);


echo "<br>";
$a = "Hello";
echo strrev($a);

echo "<br>";
echo strcmp($a , "heLLo");


?>
