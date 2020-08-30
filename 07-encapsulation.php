<?php

/*
 * Encapsulation/Visibilitas Object
 * 1. Public --> Bisa digunakan dalam class-nya dan dari luar class.
 * 2. Protected --> Hanya bisa digunakan dalam class dan turunannya (subclass)
 * 3. Private --> Hanya bisa digunakan dalam class-nya itu sendiri
 * 
 * Best Practice:
 * 1. Selalu gunakan encapsulation/visibilitas
 * 2. Pertimbangkan visibilitas saat menulis kode
 * 3. Gunakan visibilitas public hanya jika perlu
 * 4. Kelompokkan/susun properti/method pada masing-masing visibilitasnya
 */

class Mahasiswa
{
    public $nama = 'Basic';
    public $jurusan = 'Basic';
    protected $ipk = 'Basic';
    private $npm = 'Basic';

    public function biodata() {
        return 'Nama: ' . $this->nama . ', Jurusan: ' . $this->jurusan . '.<br>';
    }

    public function dataTransparan() {
        return 'Nama: ' . $this->nama . ', Jurusan: ' . $this->jurusan .
        ', IPK: ' . $this->ipk . ', NPM: ' . $this->npm . '.<br>';
    }

    protected function dataSensitif() {
        return 'IPK: ' . $this->ipk;
    }

    private function dataTerlarang() {
        return 'NPM: ' . $this->npm;
    }

    public function bukaDataTerlarang() {
        return $this->dataTerlarang() . ' (Ini data terlarang!)<br>';
    }
}

class MahasiswaPindahan1 extends Mahasiswa
{
    public function biodata() {
        /*
         * Property dengan visibilitas Public dan Protected dapatdiakses oleh
         * Method turunannya, sedangkan Private tidak.
         */

        return 'Nama: ' . $this->nama . ', Jurusan: ' . $this->jurusan .
        ', IPK: ' . $this->ipk . ', NPM: (Private).<br>';
    }

    public function dataSensitifOk() {
        /*
         * Method dataSensitif pada class parent bersifat protected, tetapi
         * pada Metho dataSensitifOk (class child) bersifat public. Jadi
         * Method dataSensitif dari luar class melalui Method dataSensitifOk
         */

        return $this->dataSensitif();
    }

    public function dataTerlarangOk() {
        // Kode berikut akan menghasilkan pesan error karena memanggil Method
        // dengan visibilitas Private

        // return $this->dataTerlarang();
    }
}


// Instance class Mahasiswa
$mahasiswa = new Mahasiswa;
$mahasiswaPindahan1 = new MahasiswaPindahan1;

// Pemberian nilai pada property Public
$mahasiswa->nama = 'Ekky Ardian';
$mahasiswa->jurusan = 'Ilmu Komputer';
$mahasiswaPindahan1->nama = 'Rizki Darmawan';
$mahasiswaPindahan1->jurusan = 'Teknik Mesin';

/*
 * Pemberian nilai tidak bisa dilakukan pada property Protected dan Private.
 * Karena Public tidak bisa di akses dari luar class, sedangkan Private selain
 * tidak bisa diakses dari luar class, tidak bisa dari class turunannya juga.
 * Kode berikut akan menghasilkan pesan error:
 */

// $mahasiswa->ipk = '3.40';
// $mahasiswa->npm = '065114452';

// Pemanggilan Properti Public dari luar class
echo '[Mahasiswa] ' . $mahasiswa->nama . '<br>';
echo '[Mahasiswa] ' . $mahasiswa->jurusan . '<br>';
echo '[MahasiswaPindahan1] ' . $mahasiswaPindahan1->nama . '<br>';
echo '[MahasiswaPindahan1] ' . $mahasiswaPindahan1->jurusan . '<br>';

/* 
 * Pemanggilan properti Protected dan Private dari luar class akan menghasilkan
 * Pesan error juga. Kode berikut akan menghasilkan pesan error:
 */

// echo '[Mahasiswa] ' . $mahasiswa->ipk . '<br>';
// echo '[Mahasiswa] ' . $mahasiswa->npm . '<br>';

// Pemanggilan Method Public dari luar class
echo '[Mahasiswa] ' . $mahasiswa->biodata();
echo '[Mahasiswa] ' . $mahasiswa->dataTransparan();
echo '[Mahasiswa] ' . $mahasiswa->bukaDataTerlarang();
echo '[MahasiswaPindahan1] ' . $mahasiswaPindahan1->biodata();
echo '[MahasiswaPindahan1] ' . $mahasiswaPindahan1->dataSensitifOk();

/*
 * Pemanggilan Method Protected dan Private juga tidak bisa dilakukan dari luar
 * class. Kode berikut akan menghasilkan pesan error:
 */

// echo '[Mahasiswa] ' . $mahasiswa->dataSensitif();
// echo '[Mahasiswa] ' . $mahasiswa->dataTerlarang();