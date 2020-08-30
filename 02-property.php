<?php

class Student
{
    // Property
    var $name;
    var $country = 'None';
}

// Proses Instance Object
$student1 = new Student;
$student2 = new Student;

// Memberikan nilai pada Properti yang ada pada class Student
$student1->name = 'Ekky Ardian';
$student2->name = 'Rizki Darmawan';

// Memanggil Properti 'nama' pada class Student
echo $student1->name . "<br>";
echo $student2->name . "<br>";

// Mengecek Properti (beserta Nilainya) yang ada pada Class Student
$class_vars = get_class_vars('Student');
echo 'Properti yang dimiliki class Student:';
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// Mengecek Properti tertentu pada class Student
if (property_exists('Student', 'name')) {
    echo "Properti 'name' tersedia";
}
else {
    echo "Properti 'name' tidak tersedia";
}