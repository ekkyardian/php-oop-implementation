<?php

/*
 * Static Property dan Static Method
 * Yaitu pendeklarasian Properti atau Method, di mana Property atau Method
 * tersebut, ketika akan digunakan/dipanggil dari luar class tidak perlu mela-
 * kukan instance object. Bisa langsung dipanggil.
 * 
 * Perbedaan Static dengan yang biasa (bukan static):
 * 1. Ketika dalam class akan menggunakan static property/Method maka gunakan:
 *    self::$variable sebagai pengganti $this->variable
 * 2. Tidak dilakukan instance object. Sebagai gantinya menggunakan perintah:
 *    NamaClass::$property atau NamaClass::method()
 * 3. Static property/Method yang diwariskan bersifat shared variables, artinya:
 *    Perubahan nilai pada parent class mempengaruhi child class-nya.
 *    Juga, perubahan nilai pada child class memperngaruhi parent class-nya.
 */

class Pegawai
{
    public static $nama = 'Ekky Ardian';
    public static $jabatan = 'Programmer';
    public static $tunjangan = ['Kesehatan', 'Makan', 'Pensiun'];
    private static $gaji = 'Rp8.000.000';

    public static function biodata() {
        // self::$variable sebagai pengganti $this->variable
        return 'Nama: '. self::$nama . ', Jabatan: ' . self::$jabatan .
        ', Gaji: ' . self::$gaji . '<br>';
    }
}

Class PegawaiKontrak extends Pegawai
{
    # code here...
}

// Pemanggilan property (tanpa melakukan instance object)
echo Pegawai::$nama . '<br>';

// Pemanggilan method (tanpa melakukan instance object)
echo Pegawai::biodata();

/*
 * Pada contoh berikut dilakukan pemanggilan data Property tunjangan melalui
 * class 'Pegawai' (parent). Kemudian pada class 'PegawaiKontrak' (child)
 * dilakukan pengeditan data pada Property tunjangan, lalu ketika Property
 * tunjagan dilakukan pemanggilan data lagi melalui class Pegawai, data property
 * -nya ikut diubah juga.
 */

echo '[Pegawai] ' . implode(', ', Pegawai::$tunjangan) . '<br>';
PegawaiKontrak::$tunjangan[] = 'Cuti tahunan';
echo '[Pegawai] ' . implode(', ', Pegawai::$tunjangan) . '<br>';
echo '[PegawaiKontrak] ' . implode(', ', PegawaiKontrak::$tunjangan) . '<br>';