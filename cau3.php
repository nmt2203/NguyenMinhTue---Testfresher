<?php
$mang = [];
$numbers = array(1,5,4,7,9,0,-10,13,93,14,15);
sort($numbers);

$n  = count($numbers);
for($i = 0; $i < $n;$i++){
    if($i = $n-1){
        echo $numbers[$i]-$numbers[$i-1];
    }
    else {
        echo $numbers[$i+1]-$numbers[$i];
    }
}
?>