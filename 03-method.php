<?php

/*
 * Method/Function itu sama saja. Penyebutannya saja yang berbeda:
 * 
 * PHP-OOP --> Method
 * PHP-Prosedural --> Function
 *
 * Sedikit yang membedakan, pada konsep OOP Method dideklarasikan dalam class
 */

class Student
{
    // Property
    var $nama;
    var $country = 'Bogor';

    // Method/Function
    function sayHello() {
        return 'Hello world!';
    }
}

// Instance object -> class Student
$hello = new Student;

// Memanggil function sayHello pada class Student
echo $hello->sayHello() . "<br>";

// Mengecek Method yang ada pada Class Student
$class_method = get_class_methods('Student');
echo 'Method yang dimiliki class Student:';
echo "<pre>";
print_r($class_method);
echo "</pre>";

// Mengecek Method tertentu pada class Student
if (method_exists('Student', 'sayHello')) {
    echo "Method 'sayHello' tersedia";
}
else {
    echo "Method 'sayHello' tidak tersedia";
}