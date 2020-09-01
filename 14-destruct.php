<?php

/*
 * Destruct Method
 * Digunakan untuk menghentikan script tertentu. Method ini akan bekerja secara
 * oromatis begitu sudah tidak ada skrip yang dijalankan. Cara pendeklarasian:
 * __destruct()
 * 
 * Cara kerja/fungsi:
 * 1. Bekerja secara otomatis ketika referensi terakhir dari instance dihapus
 * 2. Menggunakan unset() untuk mengakhiri suatu property/method tanpa harus
 *    menunggu referensi terakhir dari suatu instace dihapus.
 * 3. Menghentikan script
 */

class Aritmatika
{
    // public $bil1 = 0;
    // public $bil2 = 0;

    public function __construct($bil1, $bil2) {
        $result = $bil1 + $bil2;
        echo $bil1 . ' + ' . $bil2 . ' = ' . $result . '<br>';
    }

    public function perkalian($bil1, $bil2) {
        $result = $bil1 * $bil2;
        echo $bil1 . ' x ' . $bil2 . ' = ' . $result . '<br>';
    }

    public function __destruct() {
        echo "Script Stoped!<br>";
    }
}

$aritmatika = new Aritmatika(2, 2);

/*
 * Apabila kode unset berikut diaktifkan, maka pemanggilan method perkalian()
 * dibawahnya tidak dapat dilakukan (akan menghasilkan pesan error). Hal tersebut
 * karena Instance Object $aritmatika sudah keburu dihapus/dihentikan dengan
 * perintah unset() sebelum pemanggilan method perkalian dilakukan.
 */

// unset($aritmatika);

$aritmatika->perkalian(5, 10);