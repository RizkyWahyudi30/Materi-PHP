<?php

/**
 * Constructor and Destructor
 * 
 */
class Orang
{
    public $name;

    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
        echo "ini dari consctructor:";
    }

    // Destructor : 
    public function __destruct()
    {
        echo "<br> Ini di running jika objek dihapus atau script selesai di running <br>";
    }
}

$orang1 = new Orang("Wahyu");
echo $orang1->name;

// test hello world
echo "<br> Test, ini testing destructor";
