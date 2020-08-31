<?php

/*
 * Construct
 * 
 * Method Construct adalah method yang akan secara otomatis dijalankan begitu
 * dilakukan instance object terhadap class yang menampung method tersebut, atau
 * terhadap class turunannya (child).
 * 
 * Cara mendefinisikannya yaitu dengan menambhakan double underscord (__)
 * sebelum penamaan methodnya --> __methodName
 * 
 * Selain itu, method construct harus memiliki visibilitas public.
 */

class Student
{
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }
}

class Elementary extends Student
{
    public $total = 10;
}

class Junior extends Student
{
    public $total = 20;
}

// $student = new Student;
$elementary = new Elementary;
$junior = new Junior;
echo $elementary->total . '<br>';
echo $junior->total . '<br>';

echo 'Count: ' . Student::$count;