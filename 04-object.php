<?php

/*
 * Object/Instance Object Lanjutan
 * 
 * Cara menggunakan Instance
 * 1. Di luar class  --> $variable->
 * 2. Di dalam class --> $this-> 
 */

class Student
{
    // Property
    var $firstName;
    var $lastName;

    // Method/Function
    function fullName() {
        // Memanggil Property dari dalam Class itu sendiri ($this->)
        return $this->firstName . ' ' . $this->lastName;
    }
}

// Instance object -> class Student
$namaSiswa = new Student;

// Memberikan nilai pada Property dalam class Student
$namaSiswa->firstName = 'Ekky';
$namaSiswa->lastName  = 'Ardian';

// Memanggol Method fullName pada class Student
echo $namaSiswa->fullName();