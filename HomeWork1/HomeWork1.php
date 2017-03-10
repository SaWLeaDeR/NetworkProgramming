<?php

echo "my first project   <br><br><br>";
echo "What time is it? <br>";
echo 'The Time: ' . date('H:i');
echo "<br><br>";
echo "which day is today? <br>";
echo date('d F Y l');
echo "<br><br>";

echo "Lets do my HomeWork1<br><br><br><br>";

$sayi=15;
$lowerbounded=10;
$upperbounded=20;

if($sayi > $lowerbounded){
    echo  "$sayi" ." is upper then " . "$lowerbounded";
}elseif($sayi > $upperbounded){
    echo "$sayi " . "is lower then" . "$upperbounded";    
}else{
    echo "think about again that number is right";
}

//if this is this is wrong 

echo "<br><br><br><br>";
if(($sayi < $upperbounded) && ($sayi > $lowerbounded)){
    echo "$sayi ". "is between " . "$lowerbounded " . "and " . "$upperbounded";
}

?>