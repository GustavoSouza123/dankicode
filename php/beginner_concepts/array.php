<?php

    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $merge = array_merge($array1, $array2);
    print_r($merge);

    echo "<br><br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);

    echo "<br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_intersect_key($array1, $array2);
    print_r($result);

    echo "<br>";

    $array1 = array("nome" => "Gustavo");
    $array2 = array("nome" => "João");
    $array3 = array("nome" => "Maria");
    $result = array_intersect_key($array1, $array2, $array3);
    print_r($result);

    echo "<br>";

    $array1 = array(0, 1, 2, 3);
    $array2 = array(0, 1);
    $result = array_intersect_key($array1, $array2);
    print_r($result);

    echo "<br><br><br>";

    $arr = ["<p>Gustavo</p>", "Elia", "<h3>Eisele</h3>", "<hr>1", "Souza"];
    print_r(array_map("strip_tags", $arr));

    echo "<br>";

    /*$arr1 = [2, 4, 6];
    $arr2 = [1, 3, 5];
    function sum($n1, $n2) {
        return $n1 + $n2;
    }
    echo array_map("sum", $arr1, $arr2);*/

    function cube($n) {
        return $n * $n * $n;
    }

    $arr = [1, 2, 3, 4, 5];
    $result = array_map("cube", $arr);
    print_r($result);

?>