<?php
echo "Materi ERROR-HANDLING <br> \n";

// notice error
$num = 5;
// echo $number;
// Warning: Undefined variable $number in C:\xampp\htdocs\belajar-php\error-handling\index.php on line 6
// echo "ini kode setelah error: " . $num; // tetap berjalan

// warning error
// include("file_tidak_ada.php");
// Warning: include(file_tidak_ada.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\belajar-php\error-handling\index.php on line 11

// Warning: include(): Failed opening 'file_tidak_ada.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\belajar-php\error-handling\index.php on line 11

// echo "ini kode setelah warning error";

// fatal error
// fungsitidakada();
// echo "ini kode setelah fatal eror";

// Fatal error: Uncaught Error: Call to undefined function fungsitidakada() in C:\xampp\htdocs\belajar-php\error-handling\index.php:19 Stack trace: #0 {main} thrown in C:\xampp\htdocs\belajar-php\error-handling\index.php on line 19

// kita dapat menghandle nya dengan try-catch dan finally
// contoh
function hitung($angkaPertama, $angkaKedua)
{
    // buat pengkondisian / kemungkinan
    if ($angkaKedua == 0) {
        throw new Exception("pembagian dengan nol tidak bisa"); // throw new Exception itu untuk melempar errornya dan membuat pesan errornya
    }
    return $angkaPertama / $angkaKedua;
}

try {
    echo hitung(10, 0);
    // echo hitung(10, 2); // untuk finally akan tetap running
} catch (Exception $e) {
    echo "Pengecualiannya: ", $e->getMessage(), "<br>"; // dengan getMessage() : mengembalikkan pesan yang ada di Exception 
    echo "Pengecualiannya: ", $e->getCode(), "<br>"; // dengan getCode() : mengembalikkan, akar masalahnya
    echo "Pengecualiannya: ", $e->getFile(), "<br>"; // dengan getFile() : tempat dimana kita ngodingnya, url gitu
    echo "Pengecualiannya: ", $e->getLine(), "<br>"; // dengan getLine() : baris yang membuat pesan pengecualian, di baris 30
} finally {
    echo " <br> Blok finally selalu running <br>"; // blok ini akan tetap berjalan meskipun tidak error
}

// echo hitung(10, 0);
// Fatal error: Uncaught DivisionByZeroError: Division by zero in C:\xampp\htdocs\belajar-php\error-handling\index.php:28 Stack trace: #0 C:\xampp\htdocs\belajar-php\error-handling\index.php(31): hitung(10, 0) #1 {main} thrown in C:\xampp\htdocs\belajar-php\error-handling\index.php on line 28