<?php
echo "Materi function di PHP <br>";
/**
 * Syntax Function
 * 
 * function Halo(a, b) {
 *    // logika
 * }
 */

// Syntax biasa
function Halo()
{
    echo "Halo Dunia, Aku Wahyu <br>";
}
Halo();

// Dengan parameter
function Hitung($a, $b)
{
    $rekap = $a + $b;
    echo "Nilai : $rekap <br>";
}
Hitung(4, 5); // angka 4 dan 5 bisa didefinisikan sebagai argumen

// Return statement
function PersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}
// echo PersegiPanjang(3, 5);
// atau
$nilai = PersegiPanjang(4, 5);
echo "Nilai nya : $nilai";
