<?php

/*
 * Setter dan Getter
 * Menetapkan suatu aturan di mana perubahan pada sebuah Properti tidak dapat
 * dilakukan secara langsung, begitu juga saat pengambilan nilai. Akan tetapi
 * melalui Setter (ketika berniat memberikan nilai) dan melalui Getter (ketika
 * akan mengambil suatu nilai).
 * 
 * Tujuannya adalah:
 * 1. Mengatur kewenangan akses
 * 2. Membuat properti read-only atau write-only
 * 3. Berguna untuk membuat nilai pre-processing
 * 4. Memungkinkan mengakses private property
 * 
 * Tetapi perlu diingat juga untuk menghindari "Naive Setter" dan "Naive Getter".
 * Di mana aturan setter dan getter yang dibuat hanya membuat proses pengkodean
 * atau kompilasi kode menjadi lebih lama (tidak memiliki tujuan yang jelas).
 */

class Product
{
    private $price;

    public function setPrice($value) {
        $noFormat = preg_replace('/Rp/', '', $value);
        $float = floatval($noFormat);
        if ($float <= 0) {
            return 'Harga harus lebih dari 0';
        }
        $this->price = $float;
    }

    public function getPrice() {
        return 'Rp' . number_format($this->price, 2);
    }
}

$product = new Product;

$product->setPrice('Rp100000');
echo $product->getPrice();