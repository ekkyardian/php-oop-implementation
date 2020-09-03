<?php

/*
 * Trait
 * Memiliki fungsi yang kurang lebih sama dengan interface. Yang sedikit membe-
 * dakan andalah:
 * 1. Trait menyediakan proses atau detai implementasi, sedangkan  interface
 *    tidak.
 * 2. Bisa menggunakan visibilitas seperti class pada umumnya (public,
 *    protected, dan private), sedangkan interface hanya public.
 * 3. Menggunakan perintah use dalam class ketika akan menggunakannya, di inter-
 *    face menggunakan kata implements.
 * 4. Trait menerapkan horizontal code sharing. Artinya bisa digunakan dengan
 *    bebas dimana saja tanpa tergantung oleh suatu class.
 * 
 * Trait ini lebih mirip dengan class bisa yang memiliki class turunan.
 * 
 * Pertanyaan Umum:
 * T: Lalu, kenapa tidak menggunakan class yang biasa aja, terus manfaatin fitur
 *    pewarisan?
 * J: Karena, kau tahu, terkadang kita tidak ingin menggunakan class/method yang
 *    sama karena sudah memiliki skup yang berbeda.
 * T: Ww.. wait. What?
 * J: Yes.
 */

trait Log
{
    protected function log($message) {
        echo "{$message} \n";
    }
}

class Table
{
    use Log; // Inisiasi menggunakan trait Log
    public function hello() {
        $this->log("Hello, Guys!");
    }
}

(new Table)->hello();