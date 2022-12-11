<?php

$age = array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");

asort($age);
foreach($age as $x => $x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}
echo "<br>";
ksort($age);
foreach($age as $x => $x_value) {
    echo "Key= " . $x .", Value= " . $x_value;
    echo "<br>";
}
echo "<br>";
arsort($age);
foreach($age as $x => $x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}
echo "<br>";
krsort($age);
foreach($age as $x => $x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}
?>







