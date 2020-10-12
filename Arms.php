<?php
echo "Armstrong Numbers: ";
for($i = 1; $i <= 1000; $i++) {
  $sum = 0;
  $qu = $i;
  while($qu != 0) {
$remainder = $qu % 10;
$thrice = $remainder * $remainder * $remainder;
$sum += $thrice;
$qu = $qu / 10;
  }
  if ($sum == $i) {
  
    echo "<p>$i </p>";
}
}

?>
