<?php
class Hewan
{
    // private $nama; // tidak bisa diakses yang Class Kucingnya
    protected $nama;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Kucing extends Hewan
{
    public function Mengeong()
    {
        $this->nama;
        echo "meow meow";
    }
}

$kucing = new Kucing();
$kucing->setNama("cetiper");
echo $kucing->getNama();

echo $kucing->Mengeong();
