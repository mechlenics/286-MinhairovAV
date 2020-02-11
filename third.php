<?php
	// task 1
		echo strtoupper ("php");
		echo '<br>'; 
	// task 2
		echo strtolower ("PHP");
		echo '<br>';
	//task 3
		echo ucfirst("london");
		echo '<br>';
	//task 4
		echo lcfirst("London");
		echo '<br>';
	//task 5
		echo ucwords("london is the capital of great britain");
		echo '<br>';
	//task 6
		echo ucfirst(strtolower("LONDON"));
		echo '<br>';
	//task 7 
		echo strlen("html css php");
		echo '<br>';
	//task 8 
		$password = "sdff222222222222222s";
		if ((strlen($password)>5) & (strlen($password)<10)){
			echo "Пароль подходит";
			echo '<br>';
		}
		else{
			echo "Пароль не подходит";
			echo '<br>';
		}
	//task 9
		echo substr("html css php", 0, 4);
		echo '<br>';
		echo substr("html css php", 5, 4);
		echo '<br>';
		echo substr("html css php", 9);
		echo '<br>';
	//task 10
		echo substr ("123456", -3);
		echo '<br>';
	//task 11 
		$str = "htstp://32123123";
		$st = substr ($str, 0 , 7);
		if ($st == "http://" ) {
			echo "Да";
			echo '<br>';
		}
		else{
			echo "Нет";
			echo '<br>';
		}
	//task 12
	$str = "https://32123123";
		$st = substr ($str, 0 , 7);
		$s = substr ($str, 0 , 8);
		if (($st == "http://") || ($s == "https://")) {
			echo "Да";
			echo '<br>';
		}
		else{
			echo "Нет";
			echo '<br>';
		}
	//task 13
		$str = "asd.png";
		$st = substr($str, -4);
		if ($st == ".png") {
			echo "Да";
			echo '<br>';
		}
		else{
			echo "Нет";
			echo '<br>';
		}
	//task 14
		$str = "https://32123123.png";
		$st = substr ($str, -4);
		$s = substr ($str, -4);
		if (($st == ".jpg") || ($s == ".png")) {
			echo "Да";
			echo '<br>';
		}
		else{
			echo "Нет";
			echo '<br>';
		}
	//task 15
		$str = "sdddd";
		if ((strlen($str))>5){
			$st = substr($str, 5);
			echo $st;
			echo "...";
			echo '<br>';
		}
		else{
		echo $str;
		echo '<br>';
		}
	//task 16
		echo str_replace('.', '-', '31.12.2013');
		echo '<br>';
	//task 17
		$str = "abcf";
		echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
		echo '<br>';
	//task 18
		echo str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], "", "1a2b3c4b5d6e7f8g9h0");
		echo '<br>';
	//task 19 var 1
		echo strtr('aabcf', ["a" => "1", "b" => "2", "c" => "3"]);
		echo '<br>';
	//task 19 var 2
		echo strtr('aabbccf','abc','123');
		echo '<br>';
	//task 20
		$str= "abcdefgfgf";
		echo substr_replace($str, '!!!', 4, 5);
		echo '<br>';
	//task 21
		echo strpos('abc abc abc' ,'b');
		echo '<br>';
	//task 22
		echo strrpos('abc abc abc', 'a');
		echo '<br>';
	//task 23 
		echo strpos('abc abc abc' ,'b', 3);
		echo '<br>';
	 // task 24
        $str = 'aaa aaa aaa aaa aaa';
            echo strpos($str,' ',4);
            echo '<br>';
    // task 25
        $str = '.ffkjfdkjfj';
        $emp = strpos($str, '..');
        if (($emp === 0) || ($emp > 0)){
            echo 'Есть';
            echo '<br>';
        }
        else{
            echo 'Нет';
            echo '<br>';
        }
    //task 26
        if (strpos('httннгp://', 'http://') === 0){
            echo 'Да';
            echo '<br>';
        }
        else{
            echo 'Нет';
            echo '<br>';
        }
    // task 27
        $str = 'html css php';
        $ep = explode(' ', $str);
        echo $ep[0];
        echo '<br>';
        echo $ep[1];
        echo '<br>';
        echo $ep[2];
        echo '<br>';
    // task 28
        $ar = ['html', 'css', 'php'];
        echo implode($ar, ',');
        echo '<br>';
    // task 29 
        $str = '2013-12-31';
        $ep = explode('-', $str);
        echo $ep[0];
        echo '.';
        echo $ep[1];
        echo '.';
        echo $ep[2];
        echo '<br>';
    // task 30 
       $str = '1234567890';
       var_dump (str_split($str, 2));
       echo '<br>'; 
    // task 31 
    $str = '1234567890';
    var_dump (str_split($str, 1));
    echo '<br>';
    // task 32
        $str = '1234567890';
        $spl = str_split($str, 2);
        echo $spl[0];
        echo '-';
        echo $spl[1];
        echo '-';
        echo $spl[2];
        echo '-';
        echo $spl[3];
        echo '-';
        echo $spl[4];
        echo '<br>';
    // task 33
        echo trim(' sdfohjsfkjsfkjl ');
        echo '<br>';
    // task 34
        echo trim('/php/', '/');
        echo '<br>';
    // task 35
        $str = 'слова слова слова.';
        echo rtrim($str, '.');
        echo '.';
        echo '<br>';
    // task 36 
        echo strrev('12345');
        echo '<br>';
    // task 37
        $str = 'lol';    
        if (strrev($str) == $str){
            echo 'Да';
            echo '<br>';
        }
        else{
            Echo 'Нет';
            echo '<br>';
        }
    // task 38 
        $str = '12345678';
        echo str_shuffle($str);
        echo '<br>';
    // task 39 
        $str = 'qwertyuiopasdfghjklzxcvbnm';
        $tr = str_shuffle($str);
        echo substr($tr, 0, 6);
        echo '<br>';
    // task 40
        echo number_format(12345678, 0, ' ', ' ');
		echo '<br>';
	// task 41
		$str = 'x';
		$i = 1;
		while ($i < 6){
			echo str_repeat($str, $i);
			echo '<br>';
			$i++;
		}
	//task 42
		$i = 1;
		while ($i < 10){
			echo str_repeat($i, $i);
			echo '<br>';
			$i++;
		}
	//task 43
		echo strip_tags ('html, <b>php</b>, js');
		echo '<br>';
	//task 44
		echo strip_tags ('html, <b>php</b>, <i>js,</i>', '<b><i>');
		echo '<br>';
	//task 45 
		echo htmlspecialchars('html, <b>php</b>, js');
		echo '<br>';
	//task 46
		echo ord('a'). ord('b'). ord('c'). ord(' ');
		echo '<br>';
	//task 47
		echo '65-90, 97-122';
		echo '<br>';
	//task 48
		echo chr(33);
		echo '<br>';
	//task 49
		echo $str = chr(mt_rand(65, 90));
		echo '<br>';
	//task 50
		$len = explode (' ','97 98 99 100 101 102 103 104 105 106 107 108 109 110 111 112 113 114 115 116 117 118 119 120 121 122');
		$sh = shuffle($len);
		$i = 0;
		while ($i < mt_rand(1,10)){
			$str = chr($len[mt_rand(0,25)]); 
			$i++;
			echo $str;
		}
	echo '<br>';
	//task 51
		$s = 'Z';
		if (ord($s)< 91){
				echo 'Большая буква';
				echo '<br>';
		}
		else{
				echo 'Маленькая буква';
				echo '<br>';
		}
	//task 52
		$str = 'ab-cd-ef';
		echo strchr($str, '-cd-ef');
	//task 53
		$str = 'ab-cd-ef';
		echo strrchr($str, '-ef');
	//task 54
		$str = 'ab--cd--ef';
		echo strstr($str, '--cd--ef');



		
		
?>