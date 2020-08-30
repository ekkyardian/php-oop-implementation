<?php

/*
 * Inheritence/Pewarisan. Tujuan:
 * 1. Class baru dapat menggunakan Property/Method dari class induk
 * 2. Merapikan kode
 * 3. Mencegah terjadinya perulangan penulisan kode
 * 4. Memudahkan dalam maintenance
 * 5. Meminimalisir ketidak konsistenan dan bugs
 */

class User
{
    // Property
    var $firstName;
    var $lastName;
    var $username;

    // Method/Function
    function fullName() {
        // Memanggil Property dari dalam Class itu sendiri ($this->)
        return $this->firstName . ' ' . $this->lastName . "<br>";
    }
}

// Inheritence/Pewarisan class Customer (child) dari class User (Parent)
class Customer extends User
{
    # code here...
}

// Instance object -> class Customer
$customer = new Customer;

// Memberikan nilai pada Property dalam class Customer
$customer->firstName = 'Ekky';
$customer->lastName  = 'Ardian';

// Memanggol Method fullName pada class Student
echo $customer->fullName();

// Mengecek apakah suatu Instance merupakan turunan dari class Tertentu
if (is_subclass_of($customer, 'User')) {
    echo 'Instance Customer merupakan turunan dari Class User' . "<br>";
}
else {
    echo 'Instance Customer bukan turunan dari Class User' . "<br>";
}

// Mengecek class parent dari suatu Instance
$parents = class_parents($customer);
echo implode(', ', $parents);