<?php

echo "HomeWork 4   <br><br><br>";

$result = 0;

function FaktoriyelAl($number1) {
   if(($number1 == 0) || ($number1 == 1)){
       return 1; 
   }else{
   
   return $number1 * FaktoriyelAl($number1 - 1);
   }
}


$result =FaktoriyelAl(6);
echo $result;




?>