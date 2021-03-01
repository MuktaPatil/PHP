<?php
$marks = 94;
$a = 0;
if($marks >= 80)
	$a = 1;
if(($marks>60) and ($marks<80))
	$a = 2; 
if(($marks>50) and ($marks<60))
	$a = 3;
if(($marks>60) and ($marks<80))
	$a = 4;  
if($marks <= 40)
	$a = 5;
Echo "<h2>Marks : $marks</h2><br>";
switch($a)
{
case 1:
	echo "<h2>Division: Distiction!!</h2>";
	break;
case 2:
	echo "<h2>Division: First Class!</h2>";
	break;
case 3:
	echo "<h2>Division: Second Class!</h2>";
	break;
case 4:
	echo "<h2>Division: Third Class</h2>";
	break;
case 5:
	echo "Fail";
	break;
	}
	
?>
