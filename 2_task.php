<?php
    header("Content-Type: text/plain");
    // task 1.1
        echo "Задание 1.1: ", strtoupper ("php"), "\n"; 
    // task 1.2
        echo "Задание 1.2: ", strtolower ("PHP"), "\n";
    //task 1.3
        echo "Задание 1.3: ", ucfirst("london"), "\n";
    //task 1.4
        echo "Задание 1.4: ", lcfirst("London"), "\n";
    //task 1.5
        echo "Задание 1.5: ", ucwords("london is the capital of great britain"), "\n";
    //task 1.6
        echo "Задание 1.6: ", ucfirst(strtolower("LONDON")), "\n";
    //task 2.1 
        echo "Задание 2.1: ",strlen("html css php"), "\n";
    //task 2.2 
        $password = "sdff222222222222222s";
        echo "Задание 2.2: ";
        if ((strlen($password)>5) & (strlen($password)<10)) {
        echo "Пароль подходит\n";
        } else {
        echo "Пароль не подходит\n";
        }
    //task 3.1
        echo "Задание 3.1: ", substr("html css php", 0, 4), "\n";
        echo "Задание 3.1: ", substr("html css php", 5, 4), "\n";
        echo "Задание 3.1: ", substr("html css php", 9), "\n";
    //task 3.2
        echo "Задание 3.2: ", substr ("123456", -3), "\n";
    //task 3.3 
        $str = "htstp://32123123";
        $st = substr ($str, 0 , 7);
            
        if ($st == "http://" ) {
        echo "Да";
        } else { 
        echo "Нет";

        }
    //task 12
    $str = "https://32123123";
    $st = substr ($str, 0 , 7);
    $s = substr ($str, 0 , 8);
    if (($st == "http://") || ($s == "https://")) {
    echo "Да";

    }
    else{
    echo "Нет";

    }
    //task 13
    $str = "asd.png";
    $st = substr($str, -4);
    if ($st == ".png") {
    echo "Да";

    }
    else{
    echo "Нет";

    }
    //task 14
    $str = "https://32123123.png";
    $st = substr ($str, -4);
    $s = substr ($str, -4);
    if (($st == ".jpg") || ($s == ".png")) {
    echo "Да";

    }
    else{
    echo "Нет";

    }
    //task 15
    $str = "sdddd";
    if ((strlen($str))>5){
    $st = substr($str, 5);
    echo $st;
    echo "...";

    }
    else{
    echo $str;
    }
    //task 16
    echo str_replace('.', '-', '31.12.2013');
    //task 17
    $str = "abcf";
    echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
    //task 18
    echo str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], "", "1a2b3c4b5d6e7f8g9h0");
    //task 19 var 1
    echo strtr('aabcf', ["a" => "1", "b" => "2", "c" => "3"]);
    //task 19 var 2
    echo strtr('aabbccf','abc','123');
    //task 20
    $str= "abcdefgfgf";
    echo substr_replace($str, '!!!', 4, 5);
    //task 21
    echo strpos('abc abc abc' ,'b');
    //task 22
    echo strrpos('abc abc abc', 'a');
    //task 23 
    echo strpos('abc abc abc' ,'b', 3);
     // task 24
        $str = 'aaa aaa aaa aaa aaa';
            echo strpos($str,' ',4);

    // task 25
        $str = '.ffkjfdkjfj';
        $emp = strpos($str, '..');
        if (($emp === 0) || ($emp > 0)){
            echo 'Есть';

        }
        else{
            echo 'Нет';

        }
    //task 26
        if (strpos('httннгp://', 'http://') === 0){
            echo 'Да';

        }
        else{
            echo 'Нет';

        }
    // task 27
        $str = 'html css php';
        $ep = explode(' ', $str);
        echo $ep[0];
        echo $ep[1];
        echo $ep[2];
    // task 28
        $ar = ['html', 'css', 'php'];
        echo implode($ar, ',');
    // task 29 
        $str = '2013-12-31';
        $ep = explode('-', $str);
        echo $ep[0];
        echo '.';
        echo $ep[1];
        echo '.';
        echo $ep[2];
    // task 30 
       $str = '1234567890';
       var_dump (str_split($str, 2)); 
    // task 31 
    $str = '1234567890';
    var_dump (str_split($str, 1));
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
    // task 33
        echo trim(' sdfohjsfkjsfkjl ');
    // task 34
        echo trim('/php/', '/');
    // task 35
        $str = 'слова слова слова.';
        echo rtrim($str, '.');
        echo '.';
    // task 36 
        echo strrev('12345');
    // task 37
        $str = 'lol';    
        if (strrev($str) == $str){
            echo 'Да';

        }
        else{
            Echo 'Нет';

        }
    // task 38 
        $str = '12345678';
        echo str_shuffle($str);
    // task 39 
        $str = 'qwertyuiopasdfghjklzxcvbnm';
        $tr = str_shuffle($str);
        echo substr($tr, 0, 6);
    // task 40
        echo number_format(12345678, 0, ' ', ' ');
    // task 41
    $str = 'x';
    $i = 1;
    while ($i < 6){
    echo str_repeat($str, $i);

    $i++;
    }
    //task 42
    $i = 1;
    while ($i < 10){
    echo str_repeat($i, $i);

    $i++;
    }
    //task 43
    echo strip_tags ('html, <b>php</b>, js');
    //task 44
    echo strip_tags ('html, <b>php</b>, <i>js,</i>', '<b><i>');
    //task 45 
    echo htmlspecialchars('html, <b>php</b>, js');
    //task 46
    echo ord('a'). ord('b'). ord('c'). ord(' ');
    //task 47
    echo '65-90, 97-122';
    //task 48
    echo chr(33);
    //task 49
    echo $str = chr(mt_rand(65, 90));
    //task 50
    $len = explode (' ','97 98 99 100 101 102 103 104 105 106 107 108 109 110 111 112 113 114 115 116 117 118 119 120 121 122');
    $sh = shuffle($len);
    $i = 0;
    while ($i < mt_rand(1,10)){
    $str = chr($len[mt_rand(0,25)]); 
    $i++;
    echo $str;
    }
    
    //task 51
    $s = 'Z';
    if (ord($s)< 91){
    echo 'Большая буква';
    
    }
    else{
    echo 'Маленькая буква';
    
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
    