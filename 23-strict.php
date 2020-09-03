<?php

/*
 * -- Type Hint: Strict --
 * Merupakan salah satu jenis Type Hint. Ketika kita memutuskan untuk mengguna-
 * kan Type hint Strict maka setiap variable yang kita deklarasikan tidak dapat
 * menampung nilai secara dinamis lagi. Misal jika $x kita definisikan sebagai
 * int (int $x), maka ketika variable itu diisi dengan nilai, misal float, maka
 * akan menghasilkan pesan error.
 * 
 * Skrip untuk mendeklarasikan type hint strict adalah:
 * --> declare(strict_types=1);
 * 
 * Ditulis pada awal script (setelah tag pembuka php), maka semua variable dalam
 * file tersebut akan bertipe strict.
 * 
 * Kekurangan/Kelemahan:
 * 1. Type Hint Strict ini tidak akan bekerja apabila kita misalkan mendeklara-
 *    sikan sebuah method/function pada file function.php, di mana pada file
 *    tersebut didekalarasikan type strict. Sedangkan file inputnya dilakukan
 *    pada file lain, yang mana pada file tersebut tidak mendeklarasikan type
 *    stict.
 */

declare(strict_types = 1);

class Aritmatika
{
    public static function penjumlahan(int $x, int $y)
    {
        return $x + $y;
    }
}

echo Aritmatika::penjumlahan(2, 5) . "\n";
