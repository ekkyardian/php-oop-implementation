<?php

/*
 * Retutn Type
 * Memiliki kesamaan dengan type hint, tipe data yang disuposrtnya pun sama.
 * Yang membedakan adalah return type berfungsi untuk menyamkakan tipe data
 * antara function type dengan return typenya. Walaupun file function dengan
 * returnnya berbeda, akan tetap terhubung (tidak seperti strict).
 * 
 * Best Practice!
 * Usahakan untuk tidak menentukan type data pada parent class, tentukan type
 * data hanya pada child class saja. Ini untuk kepentingan flexsibiliatas keti-
 * ka kita mengerjakan projek dalam tim atau ketika kode dikerjakan oleh deve-
 * loper lapin.
 */

class Table
{
    // Di sini kita tidak menentukan tipe data untuk variable $data
    public function save($data)
    {
        return $data;
    }
}

class Mysql extends Table
{
    /*
     * Type data variable $data dideklarasikan di sini. Hal ini akan lebih
     * flexibel ketika projek dikerjakan dalam tim.
     */

    public function save($data): int
    {
        return $data;
    }
}

echo (new Mysql)->save(1);