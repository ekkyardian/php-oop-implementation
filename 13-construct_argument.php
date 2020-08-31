<?php

/*
 * Construct dengan Argument
 * Sama saja dengan method pada umumnya, method construct juga dapat diperikan
 * nilai argumen. Contoh kasus berikut akan memperlihatkan contoh penerapannya.
 */

class Kendaraan
{
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }
    public function dataKendaraan($merk) {
        echo 'Nama: ' . $this->nama . ', Harga: ' . $this->harga . ', Merk: ' .
        $merk . '<br><br>';
    }
}

$kendaraan = new Kendaraan('Mobil', '100');
$kendaraan->dataKendaraan('Suzuki');

/*
 * PRO Tips!
 * Apabila disuatu kasus kita memliki argumen yang sangat banyak, ubah argument
 * tersebut kedalam tipe data array. Berikut contoh penerapannya:
 */

class Makanan
{
    public $nama = 'Null';
    public $rasa = 'Null';
    public $warna = 'Null';
    public $harga = 'Null';

    public function __construct($argument=[]) {
        $this->nama = $argument['nama'];
        $this->rasa = $argument['rasa'];
        $this->warna = $argument['warna'];
        $this->harga = $argument['harga'];
    }

    public function cetakMakanan($argument=[]) {
        echo 'Deskripsi makanan:<br>';
        echo 'Nama: ' . $this->nama . '<br>';
        echo 'Rasa: ' . $this->rasa . '<br>';
        echo 'Warna: ' . $this->warna . '<br>';
        echo 'Harga: ' . $this->harga . '<br>';
        echo 'Jenis: ' . $argument['jenis'];
    }
}

$deskripsiMakanan = [
    'nama'  => 'Mangga',
    'rasa'  => 'Manis',
    'warna' => 'Kuning',
    'harga' => '15.000',
    'jenis' => 'Buah-buahan'
];

$makanan = new Makanan($deskripsiMakanan);
$makanan->cetakMakanan($deskripsiMakanan);
