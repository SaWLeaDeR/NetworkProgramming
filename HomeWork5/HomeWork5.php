<?php

echo "HomeWork5  <br><br><br>";



$array = array("Armut", 5, "Fatih", 23);

echo 'Array s Values' . "<br><br>".'First Value is : ' . $array[0] ."<br>". ' Second Value is : ' . $array[1] ."<br>". ' Third Value is : ' . $array[2] ."<br>". ' Forth Value is : ' . $array[3]. "<br><br><br><br>";
echo 'There are ' . count($array) . ' Values.'. "<br><br>";


echo "Lets Reverse It. <br><br><br>";

$ReverseArray[0] = $array[3];
$ReverseArray[1] = $array[2];    
$ReverseArray[2] = $array[1];
$ReverseArray[3] = $array[0];


echo 'ReverseArray s Values' . "<br><br>".'First Value is : ' . $ReverseArray[0] ."<br>". ' Second Value is : ' . $ReverseArray[1] ."<br>". ' Third Value is : ' . $ReverseArray[2] ."<br>". ' Forth Value is : ' . $ReverseArray[3]. "<br><br><br><br>";
//if this is wrong program look at this


krsort($array);

foreach ($array as $reverseArray => $val) {
    echo "$reverseArray =$val   <br>";
}
?>