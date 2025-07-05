<?php

/**
 * 
 * Ini polymorphism
 */

class Hewan
{
    public function bersuara()
    {
        return "Suara hewan <br>";
    }
}

class Kucing extends Hewan
{
    // ini namanya overriding
    public function bersuara()
    {
        return "Suara kucing, Miaw";
    }
}

$hewan = new Hewan();
echo $hewan->bersuara();

$kucing = new Kucing();
echo $kucing->bersuara();
