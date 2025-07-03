<?php
echo "Ini materi Include - Require <br>";

echo "content <br>";

// include "footer.php";

// kalau salah penulisan file
include "footer1.php";
// require "footer1.php";

// ========== warningnya : 
// Warning: include(footer1.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\belajar-php\include-require\index.php on line 9

// Warning: include(): Failed opening 'footer1.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\belajar-php\include-require\index.php on line 9

// ========= kalau dengan require
// Warning: require(footer1.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\belajar-php\include-require\index.php on line 10

// Fatal error: Uncaught Error: Failed opening required 'footer1.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\belajar-php\include-require\index.php:10 Stack trace: #0 {main} thrown in C:\xampp\htdocs\belajar-php\include-require\index.php on line 10


// kalau pakai include, kode setelah content akan tetap di ekskusi, 
// require, tidak akan menjalankan / berhenti

echo "setelah content";
