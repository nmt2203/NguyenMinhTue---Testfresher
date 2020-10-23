<?php


$n = 3;
	$arr = array(11,2,8,10,5,99,1,8,9);
	for($i = 0; $i < $n; $i++){
		for($j = 0; $j < count($arr); $j++){
			if($j % 3 == $i )
        		echo  $arr[$j] . ', ' ;
		}
	}

?>