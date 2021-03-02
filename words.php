<?php
$txt = "GOvernment Polytechnic Amravati";
$l = strlen($txt);
for($i = 0; $i<=$l;$i++)
{
	if($txt[$i] == ' ')
	{
	$s = $s +1;
	}
}
$w = $s +1;
	
echo "Words : ",$w;

?>
