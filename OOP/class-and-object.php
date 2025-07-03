<?php
// mendefinisikan class
class Mobil
{
    // membuat property
    public $warna; // public -> bisa diakses di dalam class dan diluar class
    public $merk;
    public $tahun;

    // methods berupa function
    public function drive()
    {
        echo "Mobil berjalan";
    }

    public function info()
    {
        echo "Merk: $this->merk, Warna: $this->warna, Tahun: $this->tahun";
    }
}
// membuat object dari class mobil
$mobilSaya = new Mobil();
$mobilSaya->warna = "red";
$mobilSaya->merk = "toyota";
$mobilSaya->tahun = 2010;

// cetak propertinya: 
echo $mobilSaya->warna;
echo $mobilSaya->merk;
echo $mobilSaya->tahun;

// jalankan methodsnya 
echo $mobilSaya->drive();
echo $mobilSaya->info();
