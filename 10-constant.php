<?php

/*
 * Constant
 * Merupakan property/variable dalam suatu class yang memiliki nilai yang tidak
 * bisa diubah.
 * 
 * Aturan penulisan dan karakteristiknya:
 * 1. Diawali dengan keyword const
 * 2. Penamaan property/variable uppercase (huruf besar semua)
 * 3. Dapat menilai nilai expression (logika aritmatika, dsb)
 * 4. Support visibility modifier (PHP 7.1^)
 * 5. Perujukkan dengan: ClassName:: atau self:: (tidak menggunakan dolar sign)
 */

class Time
{
    public const DAY_IN_SEC = 60 * 60 * 24;

    public function tomorrow() {
        return time() + self::DAY_IN_SEC;
    }
}

echo Time::DAY_IN_SEC . '<br>';
$time = new Time;
echo $time->tomorrow() . '<br>';
echo time();