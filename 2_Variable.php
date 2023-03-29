<?php
    $firstName = "Phuong Anh";
    $lastName = "Le Thi";
    $fullName = $lastName . " " . $firstName; //nối chuỗi
    echo $fullName;

    echo "<br />"; //cho xuống dòng
    $age = 19;
    echo "Tuoi: ", $age;

    echo "<br />";
    var_dump($firstName); // xem kiều dữ liệu

    echo "<br />";
    echo "Gettype: ", gettype($age); // xem kiều dữ liệu

    $number = 12.34;
    echo "<br />";
    echo "Số cần chuyền: ", $number;
    echo "<br />";
    echo (int)$number; // Chuyển kiều dữ liệu
    echo "<br />";
    settype($number, "integer"); //dùng hàm settype để chuyển kiều dữ liệu
    echo $number;
    echo "<br />";

    echo is_numeric(12); // ra đc số 1: thuộc kiủ số
    echo is_string("abccd");//ra đc số 1: thc kiủ chuỗi
//is_array, is_object,....
    echo "<br />";



    define("PI", 3.14);
    define("Course", "PHP Training");
    echo Course; echo "<br />";
    echo PI;
    ?>