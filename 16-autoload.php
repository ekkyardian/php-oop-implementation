<?php

/*
 * Autoload Method
 * Merupakan salah satu megic method juga, yang membedakan adalah method
 * autoload tidak bekerja dalam class, melainkan dari luar class (non-class
 * function).
 * 
 * Fungsi/Manfaat:
 * 1. Digunakan untuk mencari class yang tidak ditemukan.
 * 2. BEST PRACTICE! Kita dapat memanfaatkan fitur autoload ini untuk melakukan
 *    load class secara otomatis apabila ketika class tidak ada/belum dipanggil
 *    (diinclude) pada suatu file (yang mana pada file tersebut dilakukan
 *    instance object terhadap class bersangkutan), dengan catatan class
 *    tersebut memang ada. Tapi, apabila class yang dicari memang tidak ada,
 *    maka akan menampilkan informasi bahwa class tersebut memang tidak ada. 
 * 3. Memungkinkan kita untuk dapat membuat struktur file menjadi lebih rapih.
 * 
 * PERHAIAN!
 * Pada materi kali ini melibatkan file lain, diantaranya:
 * 1. class/Book.php
 * 2. class/Product.php
 */

function myAutoLoad($class) {
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'class/' . $class . '.php';
    }
}

spl_autoload_register('myAutoLoad');

$book = new Book();
$book->helloBook();

$product = new Product();
$product->helloProduct();