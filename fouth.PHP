<?php
	$arr =  array(array(4,2,4,4,4),array(4,2,4,4,4), [2,2,2,2,2]);
	foreach ($arr as $lol){
		foreach ($lol as $value) {
		
		echo "<li>$value";
		}
	}
	function recurs($arr2){
        if(is_array($arr2)){
            foreach($arr2 as $st){
				$act = "$act<li>";
                $act .=  recurs($st);
				
            }
            return $act;
        } else {
            return $arr2;    
        }
    }
    echo '<br>';
	echo '<br>';
	$arr2 = array(0,0,0,0,0,0, array(7,7,7,7,7));    
	echo     recurs($arr2);
?>