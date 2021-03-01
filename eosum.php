<?php
$tot_e = 0;
$tot_o = 0;

for($i = 1; $i <= 100; $i++)
{
	if($i % 2 == 0)
		$tot_e =$tot_e+ $i;
	else
		$tot_o =$tot_o +$i;

}

echo "<h1> Sum of </h1>";
echo "<br><h2> Even nos.: $tot_e </h2>";
echo "<br><h2> Odd nos.: $tot_o </h2>";
?>
