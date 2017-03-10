<?php

echo "HomeWork6  <br><br><br>";

$number1 = 0;
$number2 = 1;
$count =1;
while ($count<=10){//if 10 is change , the number of fibonacci series is changed

    if ($count ==1){
        echo $number1. "  ";
    }elseif($count==2){
        echo $number2. "  ";
    }else{
        $Fn = $number1 + $number2;
        echo $Fn. "  ";
        $number1 = $number2;
        $number2 = $Fn;
    }
    $count++;
    
}


?>