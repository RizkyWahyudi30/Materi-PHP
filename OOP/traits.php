<?php

/**
 * 
 * Traits
 */
trait Pesan
{
    public function tampilkanPesan()
    {
        return "ini adalah pesan dari turunan";
    }

    //method lain
    public function sayHello()
    {
        return "<br> Hai hellow";
    }
}
class A
{
    use Pesan;
}

// jika ingin reuse 

$pesanA = new A();
echo $pesanA->tampilkanPesan();
echo $pesanA->sayHello();
