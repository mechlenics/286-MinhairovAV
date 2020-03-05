<?php
    header("Content-Type: text/plain");

    $n1 = 9;
    $n2 = 3;
    $n3 = 2;
    $n4 = true;
    $n5 = false;
    
    $act1 = $n1 + $n2;
    $act2 = $n1 - $n2;
    $act3 = $n1 * $n2 * $n3;
    $act4 = sqrt(9);
    $act5 = $n4 * $n5;
    $act6 = $n4 + $n5;
    $arr=range(0,10);
    $arr1 = array(
    "1" => "3",
    "3" => "1",
    );


    echo "Задача 1: $act1 \n";

    echo "Задача 2: $act2 \n";

    echo "Задача 3: $act3 \n";

    echo "Задача 4: $act4 \n";

    echo "Задача 5.1: $act5 \n";
    echo "Задача 5.2: $act6 \n";

    echo "Задача 6: ";
    var_dump($arr);

    echo "Задача 7: ";
    var_dump($arr1);

    $str = "Бережков Андрей Вячеславович";
	$stre = explode(" ", $str);
	$subs = substr($stre[1], 0, 2);
	$subr = substr($stre[2], 0, 2);
    echo "Задача 8: $stre[0] $subs.$subr.";
