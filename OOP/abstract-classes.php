<?php

/**
 * 
 * Abstract classes
 * 
 */
// class ini tidak bisa di-instasiasi / tidak bisa membuat objek dari class ini
abstract class Hewan
{
    // jika method ini kita bikin abstract, maka method turunan nya harus memiliki method ini -> function bersuara()
    abstract public function bersuara();
}

class Kucing extends Hewan
{
    // kita taruh methodnya disini
    public function bersuara()
    {
        echo "Kucing meow meow";
    }
}

// kita bisa bikin objek dari class Hewan
// $hewanSaya = new Hewan(); // sekarang sudah tidak bisa, karena sudah ditambahkan abstract

// tapi kita tetep 
$kucingSaya = new Kucing();
echo $kucingSaya->bersuara();
