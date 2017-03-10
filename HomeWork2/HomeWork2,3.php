



<?php
echo "HomeWork2 and 3    <br><br><br>";
$number1 = 13;
$number2 = 43;
$number3 = 25;
$minvalue = 0;
$maxvalue = 0;
function FindMinValue($number1,$number2,$number3){
    if (($number1 < $number2) && ($number1 < $number3)){
        $minvalue=$number1;
    }elseif (($number2 < $number1) && ($number2 < $number3)) {
        $minvalue=$number2;
    }elseif(($number3 < $number2) && ($number3 < $number1)){
        $minvalue=$number3 ;
    }
echo "minimum value is :" . $minvalue . "<br><br><br>";
}

if(($number1 > $number2) && ($number1 > $number3)){
    $maxvalue = $number1;
}elseif(($number2 > $number1) && ($number2 > $number3)){
    $maxvalue = $number2;
}elseif(($number3 > $number2) && ($number3 > $number1)){
    $maxvalue = $number3;
}    

FindMinValue(22, 11, 34);

echo "maximum value is :" . $maxvalue . "<br>";

?>