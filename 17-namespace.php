<?php

/*
 * Namespace
 * Merupakan dapat dikatakan sebagai direktori firtual. Namespace berguna ketika
 * kita memiliki class/method dengan nama yang sama (biasanya ketika kita
 * menggunakan framework/library), yang mana biasanya pada setiap library/
 * framework memiliki class dengan nama umum seperti log contohnya.
 * 
 * Keuntungan menggunakan namespace:
 * 1. Lebih mudah mengatur package
 * 2. Menyederhanakan penamaan method dan class
 * 3. Class aliases
 * 4. Penerapannya dapat memanfaatkan composer
 * 
 * Ciri/Karakeristik:
 * 1. Menggunakan kata --> namespace NamaClass, ketika mendefinisikan class baru
 *    sebagai namespace.
 * 2. Menggunakan kata --> use NamaNamespace, saat akan memanggil file class.
 * 
 * PERHAIAN!
 * Pada materi kali ini melibatkan file lain, diantaranya:
 * 1. class/Pegawai.php
 */

namespace PegawaiRoot; // Mendeklarasikan class ini sebagai namespace dengan
                       // nama PegawaiRoot.

include 'class/Pegawai.php'; // Menyematkan file class class/Pegawai.php

/*
 * Berikut contoh pemanggilan namespace. Keterangan:
 * 1. PegawaiClass --> merupakan nama nameclass yang dideklarasikan pada file 
 *    class/Pegawai.php.
 * 2. Pegawai --> merupakan nama class yang ditampung pada nameclass
 *    PegawaiClass (merupakan class yang ada pada file class/Pegawai).
 * 3. PegawaiFromClass --> merupakan nama alias yang didefinisikan sebagai nama
 *    baru ketika akan melakukan pemanggilan terhadap class/method/property
 *    pada class/pegawai.php
 */

use PegawaiClass\Pegawai as PegawaiFromClass; 

class Pegawai
{
    public static $namaPegawai = '(folder root) Ekky Ardian';

    public static function haloPegawai() {
        echo 'Folder->Root, Class->Pegawai, Method->haloPegawai<br>';
    }
}

echo Pegawai::$namaPegawai . '<br>';
Pegawai::haloPegawai();

echo '<hr>';

/*
 * Berikut adalah cara pemanggilan class yang sudah dijadikan namespace. Pemang-
 * gilannya menggunakan nama alias yang sudah didefinisikan sebelumnya.
 */

echo PegawaiFromClass::$namaPegawai . '<br>';
PegawaiFromClass::haloPegawai();