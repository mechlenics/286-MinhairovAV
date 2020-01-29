<?php
	$str = "Bережков Андрей Вячеславоич";
	
	$stre = explode(" ", $str);
	print_r($stre);
	echo substr($stre[0], 0,1 );
	$subs = substr($str, 16.5, -33.5 );
	$subr = substr($str, 30, -20 );
	
	echo $stre[0]; 
	echo $subs;
	echo ".";
	echo $subr;
	echo ".";
?>