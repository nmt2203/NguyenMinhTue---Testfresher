<?php
    $mang = array();
    $numbers = array(1,5,4,7,9,0,-10,13,93,14,15);
    sort($numbers);
  
    $n  = count($numbers);

    for($i = 0; $i < $n;$i++){
        if($i == $n-1){
            break;
        }
        $number_mang = $numbers[$i+1] - $numbers[$i];
        array_push($mang, $number_mang);
     
    }
  
    $min = min($mang);
    $output = [];
    for($i = 0; $i < $n;$i++){
        if($i == $n-1){
            break;
        }
        if($numbers[$i+1] - $numbers[$i] == $min){ 
            array_push($output, '['. $numbers[$i] . ', ' . $numbers[$i+1]. ']');
            
        }
    }
    print_r($output);
?>