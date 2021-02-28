<?php
$marks = array("Mark" => array("physics" => 38,
				 "chemistry" => 36,
				 "english" => 39),
		"Jack" => array("physics" => 36,
				 "chemistry" => 38,
				 "english" => 34),
		"Lee" => array("physics" => 30,
				 "chemistry" => 37,
				 "english" => 34),
             );


echo "Number of Student: ".(count($marks));
sort($marks);
echo "<br>Array Sorted";
echo array_search("Jack",$marks);
echo "<br> Searching Jack.....";

if (true)
{
	echo "<br>Student Found";
$f = 36+38+34;
$p = ($f/12)*10;
echo "<br> His Percentage: ".$p;

}
else
	echo "<br> Not Found";
	

?>
