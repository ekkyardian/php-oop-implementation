<?php

/* Abstract Class
 * Merupakan gabungan antara Interface dan Trait, di mana dengan abstract class
 * kita bisa membuat keduanya sekaligus. Secara garis besar perbedaan dalam
 * penggunaannya adalah:
 * --> Abstract class diperuntukkan untuk kepentingan kemudahan kita dan tim
 *     internal ketika melakukan perancangan/pengembangan kode.
 * --> Interface diperuntukkan untuk kepentingan kemudahan developer lain
 *     (diluar tim) ketika akan menelusuri/mempelajari kode.
 * 
 * Penggunaan abstract adalah ketika kita merancang sebuah sistem secara tim,
 * semua anggota dapat mengerjakan/membuat fungsi (class, method) sesuai dengan
 * yang sudah direncanakan, sehingga tidak terjadi pembuatan fungsi yang
 * berulang/diluar struktur yang sudah ditentukan. Hal ini juga dapat mempermu-
 * dah ketika mempelajari kembali kode.
 */

abstract class Database
{
    abstract public function connection();
    public function disconnect() {
        # code here...
    }
}

class Model extends Database
{
    public function connection() {
        # code here...
    }
}

$model = new Model;

/*
 * Catatan!
 * Class abstract tidak bisa dilakukan instance object. Kode berikut akan
 * menghasilkan pesan error:
 * 
 * $database = new Database;
 */