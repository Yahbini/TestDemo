<?php
    $x = 10;
    $y = $x++;
    echo "X: " . $x . "<br/>"; //11
    echo "Y: " . $y . "<br/>"; // 10

    $a = 12;
    $b = ++$a;
    echo "A: " . $a . "<br/>"; // 13
    echo "B: " . $b . "<br/>"; // 13

    // <>: so sánh khác, !=: so sánh khác

    echo ($x > $y) . "<br/>"; // 1: true

    // xor: $x xor $y
    // trả về true nếu chỉ x hoăc y mang ht true

    // Condition
    $var = "PHP training";
    $result = (is_string($var) == 1) ? "Chuỗi" : "Không là chuỗi";
    echo $result . "<br/>";

    $n = 6;
    $resultnumber = ($n > 0) ? "Số dương" : (($n < 0) ?  "Số âm" : "số 0");
    echo $resultnumber;