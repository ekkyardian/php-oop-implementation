<?php

/*
 * Pengenalan Composer
 * Pada materi ini diperkenalkan penggunaan composer sebagai tools untuk mem-
 * permudah aktivitas koding. Studi kasus pada materi ini yaitu menggunakan
 * composer untuk menginstall plugin Faker, di mana pada penggunaanya nanti
 * melibatkan beberapa fitur OOP seperti Autoload dan Namespace.
 * 
 * PERHAIAN!
 * Pada materi kali ini melibatkan file lain, diantaranya:
 * 1. Semua file yang ada pada folder --> faker
 */

require __DIR__ . '/faker/vendor/autoload.php'; // Autoload

use Faker\Factory; // Namespace

$faker = Factory::create();

echo $faker->name . '<br>';
echo $faker->address . '<br>';
