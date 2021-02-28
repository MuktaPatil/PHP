<?php
 function Greatest($x,$y,$z)
 {
   if($x > $y && $x > $z)
   {
     echo"Greatest number is $x";
   }
   else
   {
     if($y > $z)

     echo"Greatest number is $y";

   else
     echo"Greatest number is $z";
   }
 }

Greatest(56,78,19);
 ?>
