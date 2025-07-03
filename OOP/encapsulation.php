<?php

class Produk
{
    // membuat properti
    public $nama;
    protected $harga; // hanya bisa diakses di dalam kelas dan turunannya
    private $stok; // hanya bisa diakses di dalam kelasnya

    // ngeset untuk protected atau private
    public function setStok($stok)
    {
        $this->stok = $stok;
    }

    // untuk nge get si functionnya 
    public function getStok()
    {
        return $this->stok;
    }
}
$produkSaya = new Produk();
// properti nya public
$produkSaya->nama = "Handphone";
echo $produkSaya->nama;

// sekarang kita bisa akses stoknya dari luar class
$produkSaya->setStok(30000000);
// nge get nya
$produkSaya->getStok();
echo $produkSaya->getStok();
