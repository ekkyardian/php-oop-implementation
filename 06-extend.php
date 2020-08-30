<?php

/*
 * Inheritence: Extend
 */

class Kendaraan
{
    var $warna = 'Basic';
    var $roda;
    var $pintu;

    function isGoodForRain() {
        return 'Yes';
    }
}

class Motor extends Kendaraan
{
    // Di sini tidak ada property warna
    var $roda  = 2;
    var $pintu = 0;
    var $bonus = 'Helm';

    // Di sini juga tidak ada method isGoodForRain
    function halloMotor() {
        return 'Halo, ini Motor. Jangan lupa ' . $this->bonus;
    }
}
// -----------------------------------------------------------------------------


// Kendaraan -------------------------------------------------------------------
$kendaraan = new Kendaraan;

$kendaraan->warna = 'Hitam';
$kendaraan->roda  = 1;
$kendaraan->pintu = 100;

echo '[Kendaraan] Warna: ' . $kendaraan->warna . '<br>';
echo '[Kendaraan] Roda: ' . $kendaraan->roda . '<br>';
echo '[Kendaraan] Pintu: ' . $kendaraan->pintu . '<br>';
echo '[Kendaraan] Is good for rain? ' . $kendaraan->isGoodForRain() . '<br>';

// Class parent tidak bisa mengambil property/Method dari class child.
// Kode berikut akan menghasilkan error.
// echo '[Kendaraan] Kata motor:  ' . $kendaraan->halloMotor();

// Motor -----------------------------------------------------------------------
$motor = new Motor;

// Property warna berikut diambildari class parent (Kendaraan)
echo '[Motor] Warna: ' . $motor->warna . '<br>';

// Properti berikut diambil dari class Motor (Child)
echo '[Motor] Roda: ' . $motor->roda . '<br>';
echo '[Motor] Pintu: ' . $motor->pintu . '<br>';

// Method isGoodForRain berikut diambil dari class parent (Kendaraan)
echo '[Motor] Is good for rain? ' . $motor->isGoodForRain() . '<br>';

echo '[Motor] ' . $motor->halloMotor() . '! <br>';