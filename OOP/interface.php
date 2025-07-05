<?php

/**
 * 
 * Interface -> untuk membuat kode lebih terstruktur
 */
interface Kendaraan
{
    public function bergerak();
    public function maju();
    public function mundur();
    public function rem();
}

class Mobil implements Kendaraan
{
    // methods ini harus ada di dalam class ini karena sudah di interface dan kita implementasikan
    public function bergerak()
    {
        echo "mobil berjalan";
    }
    public function maju()
    {
        echo "<br> mobil maju";
    }
    public function mundur()
    {
        echo "<br> mobil mudnur";
    }
    public function rem()
    {
        echo "<br> mobil ngerem";
    }
}

$mobilBaru = new Mobil();
$mobilBaru->bergerak();
$mobilBaru->maju();
$mobilBaru->mundur();
$mobilBaru->rem();
