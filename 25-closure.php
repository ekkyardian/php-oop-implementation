<?php

/*
 * Closure
 * Closure bisa disebut juga sebagai anonimous function atau callback function
 * karena closure merupakan function yang tidak memiliki nama. Cara mendeklara-
 * sikannya hampir sama seperti mendeklarasikan function biasa, yang membedakan
 * adalah:
 * 1. setelah script function tidak diikti nama functionmya
 * 2. Ditampung kedalam variable
 * 3. Diakhir pendeklarasiannya diberi tanda ";" setelah kurawal tutup "}"
 * 
 * Closure tidak dapat membaca data yang berada diluar skupnya "{ (skup) }".
 * Artinya apablia misal kita deklarasikan variable di luar skup, variable ter-
 * sebut tidak akan terbaca (sama seperti function pada umumnya).
 * 
 * Kapan kita perlu menggunakan closure ini? Ketika kita kita ingin menjalankan
 * sebuah function tanpa perlu mengubah isi suatu property, variable atau apapun
 * dari data aslinya. Dan katanya sih ketika kita bekerja menggunakan framework
 * kita akan lebih sering menggunakan closure ini. Who know.
 */

/*
 * Variable-variable di bawah ini tidak dapat dibaca langsung oleh closure.
 * Jika ingin membacanya dapat menggunakan beberapa cara:
 * 1. Dioper melalui argumen
 * 2. menggunakan script "use $namaVariable"
 * 
 * Catatan:
 * Apabila terjadi perubahan data pada ariable yang di gunakan dalam closure,
 * maka tidak akan mempengaruhi variable aslinya (yang berada diluar closure).
 */

$hello = 'Hello';
$thanks = 'Thank you';
$bye = 'Bye';

$func = function($hello) use ($thanks, $bye) {
    $bye = 'Dadah';
    echo $hello . ". Closure defined. " . $thanks . '. ' . $bye . "\n";
};

/*
 * Pemanggilannya harus ditampung dalam variable (menggunakan simbol "$") karena
 * Closure bukanlah function.
 */

$func($hello);

echo $bye . "\n";

// Contoh lain -----------------------------------------------------------------

/* Mencari nilai ganjil genap
 * Pada perancangannya kasus ini menggunakan fungsi bawaan PHP yaitu:
 * array_filter. Penggunaan closure dengan model dibawah (pada bagian:
 * "function($item)") memungkinkan karena penggunaan fungsi  array_filter
 * tersebut
 */

// Model 1
$array =[1,2,3,4,5,6,7,8,9];
$even = array_filter($array, function($item) {
    return ($item % 2 == 0);
});

// Model 2
$oddFunction = function($item) {
    return ($item % 2 != 0);
};

$odd = array_filter($array, $oddFunction);

print_r($array);
print_r($even);
print_r($odd);