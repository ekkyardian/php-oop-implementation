<?php

/*
 * File ini merupakan pendukung dari materi "17-namespace.php"
 */

namespace PegawaiClass; // Mendeklarasikan class ini sebagai namespace dengan
                        // nama PegawaiClass.

class Pegawai
{
    public static $namaPegawai = '(folder class) Ekky Ardian';

    public static function haloPegawai() {
        echo 'Folder->Class, Class->Pegawai, Method->haloPegawai<br>';
    }
}