<?php

/*
 * Merujuk Parent Class
 * (To be hones, gua masih gak terlalu paham sama materi ini T_T)
 * 
 * Pada tutorial ini diperkenalkan cara yang lebih baik ketika class child
 * akan mengakses property/method dalam class parent. Ini akan sangat membantu
 * dalam kasus di mana kita akan melakukan overide (menimpa/mengganti) method
 * pada class parent. Dengan sintax parent:: kita dapat mengambil nilai pada 
 * property/method parent sebelum dilakukan perubahan pada class chld. 
 */

class Image
{
    public static $resizeStatus = true;

    public static function geometry() {
        echo '760x300<br>';
    }
}

class PhotoProfile extends Image
{
    public static function geometry() {
        if (self::$resizeStatus) {
            echo '50x50<br>';
        }
        else {
            parent::geometry();
        }
    }
}

Image::geometry();
PhotoProfile::geometry();

Image::$resizeStatus = false;
PhotoProfile::geometry();