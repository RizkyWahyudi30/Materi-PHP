<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe data</title>
</head>

<body>
    <?php
    $salam = "Hai semuanya, aku wahyu"; // string
    $nilai = 34; // integer 
    $float = 4.14; // float / double
    $arr = ["aku kaya", 34, 2.15, true];
    $nullType = null;
    ?>
    <!-- coba mengecek tipe data nya dengan gettype() -->
    <h1><?php echo gettype($salam) ?></h1>
    <!-- mencari nilai dari variable serta menampilkan tipe data nya -->
    <h1><?php var_dump($salam) ?></h1>
    <!-- mengecek apakah benar tipe datanya -->
    <h1><?php echo is_string($salam) ?></h1>
    <h1><?php echo is_int($nilai) ?></h1>
    <h1><?php echo is_float($float) ?></h1>
    <h1><?php echo is_array($arr) ?></h1>
    <h1><?php echo is_null($nullType) ?></h1>
    <!-- kalau kosong, berarti nilai 0 atau false -->

    <h1><?php var_dump($arr) ?></h1>
    <!-- null type -->
    <h1><?php var_dump($nullType) ?></h1>
</body>

</html>