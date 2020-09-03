<?php

/*
 * Type Hint
 * Merupakan petunjuk bagi programmer dan PHP Runtime untuk menghindari
 * kesalahan dalam menentukan tipe data (tidak terjadi salah mengira tipe data).
 * Di sisi PHP Runtume juga akan diproses lebih cepat karena menggunakan tipe 
 * data strick. Type hint dapat meminimalisir programmer dan PHP runtime dalam
 * mengenali suatu variable.
 * 
 * Apakah kita wajib menentukan type hint? Tidak, tapi sangat direkomendasikan.
 * 
 * Type hint tidak hanya bekerja pada class saja, kita juga bisa menggunakannya
 * diluar class.
 * 
 * Tipe yang didukung:
 * class/interface, self, callable, array, bool, float, int, dan string.
 */

class Makanan
{
    /*
    * Pada contoh dibawah ini kita melakukan inisialisasi type hint terhadap
    * variable x, y dan z dengan type int,string dan array.
    */

    public function nasiGoreng(int $x, string $y, array $z) {
        # code here...
    }
}

function sum(int $bil1, int $bil2) { // Input bertipe data int
    return $bil1 + $bil2;
};

/*
 * nilai input argumen dari pemanggilan function dibawah bernilai float, tapi
 * tipe data (type hint) yang dideklarasikan dalam function adalah int. Hal
 * tersebut membuat tipe data float dibawah akan dikonfersi kedalam tipe data
 * int sesuai dengan deklarasi yang dilakukan dalam function. Pada kasus ini
 * output tidak akan menghasilkan error
 */

echo sum(3.9, 5.1) . "\n"; // input bertipe data float
