<?php

/*
 * Interface
 * Adalah sebuah objek abstrak yang tidak berisi data atau proses tapi mendefi-
 * nisikan kebiasaan atau fungsi sebagai method signatures.
 * 
 * Manfaat dan karakteristik:
 * 1. Membantu programmer lain untuk membedah kode yang kita buat
 * 2. Interface dibuat bukan untuk kita pribadi
 * 
 * Keterbatasan:
 * 1. Tidak ada implementasi di dalamnya
 * 2. Hanya menggunakan visibilitas public
 */

interface TableInterface
{
    public function save(array $data);
}

interface LogInterface
{
    public function log(string $data);
}

class Table implements TableInterface, LogInterface
{
    public function save(array $data) {
        return "Save method from Table class \n";
    }

    public function log(string $data)
    {
        return $data . "\n";
    }
}

$table = new Table;
echo $table->save([]);
echo $table->log('Hello from Log');

// To be hones, masih bingung sebenernya buat apa fungsi ini.
// I mean, "Membantu programmer lain untuk membedah kode yang kita buat" disebe-
// lah mananya. I don't get it. Sorry mom...