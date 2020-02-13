<?php
    $arr1 =  [1, 2, 3, 4, 5, 6, [1, 2, 3, [1, 2, 3, 4, 5]]];
    $someArray = [
        'id'    => 1,
        'name'  => 'item1',
        'items' => [
           [
              'id'    => 2,
              'name'  => 'item2',
              'items' => [],
           ],
           [
              'id'    => 3,
              'name'  => 'item3',
              'items' => [],
           ],
           [
              'id'    => 4,
              'name'  => 'item4',
              'items' => [
                 [
                    'id'    => 5,
                    'name'  => 'item5',
                    'items' => [],
                 ],
                 [
                    'id'    => 6,
                    'name'  => 'item6',
                    'items' => [],
                 ],
              ],
           ],
        ]
    ];
    function recurs($arr)
    {
        if (is_array ($arr)) {
            foreach ($arr as $st) {
                $act .=  "<ul><li>".recurs($st)."</ul></li>";
            }
            return $act;
        } else {
            return $arr;    
        }
    }
    function factorial($n) 
    {
        if ($n==0) {
            return 1;
        } else {
            return $n * factorial($n-1);
        }
        echo '<br>';
    }
    $x = 3;    
    echo "Задание 1: $x! = ", factorial($x), "\n";
    echo "Задание 2: ", recurs($arr1), "\n";
    echo "Задание 2 если использовать SomeArray: ", recurs($someArray);
?> 
