<?php

/*
 * Clone
 * Clone merupakan sebuah magic method sama seperti construct dan destruct.
 * Bedanya method clone akan ter-trigger apabila instance object yang menampung
 * class yang memiliki method clone tersebut di lakukan cloning. Instance object
 * hasil proses clone akan memiliki property dan method yang sama seperti instance
 * yang di-copy nya. 
 * 
 * Aturan penulisan dan karakteristik:
 * 1. Mendeklarasikan method clone: __clone
 * 2. Kloning instance object: $variable = clone $instanceVariable
 * 3. method __construct tidak akan di jalankan ulang dalam instance clone
 * 4. Instance hasil clone dapat meampung nilai sendiri (tidak shared variable
 *    dengan instance object yang di-copy nya)
 */

class Product
{
    public $name;

    public function __construct() {
        echo 'New product was created.<br>';
    }

    public function __clone() {
        echo 'New product was cloned.<br>';
    }

    public function __destruct() {
        echo 'Script was stoped.<br>';
    }
}

$product = new Product;
$product->name = 'Handphone<br>';
echo $product->name;

echo '<hr>';

$productClone = clone $product;
echo $productClone->name;
$productClone->name = 'Television<br>';
echo $productClone->name;

echo '<hr>';

echo $product->name;