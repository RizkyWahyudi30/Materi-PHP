<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi string</title>
</head>

<body>
    <?php
    // === string concatenation ===
    $namaDepan = "Rizky";
    $namaBelakang = "Wahyudi";

    // dengan operator titik
    $namaLengkap = $namaDepan . " " . $namaBelakang;
    // dengan interpolasi string
    $namaPanjang = "$namaDepan $namaBelakang";

    // === pencarian string ===
    $contohKalimat = "PHP adalah bahasa pemrograman PHP";
    // menggunakan strpos
    $cariString = strpos($contohKalimat, "PHP");
    // menggunakan strrpos
    $cariString2 = strrpos($contohKalimat, "PHP");

    // === Fungsi string lain ===
    // 1. str_replace() : mengganti substring
    $contohKalimat2 = "Hello dunia, saya wahyu suka javascript dan php";
    $rep = str_replace("php", "java", $contohKalimat2);
    // 2. strlen() : menghitung panjang string
    $contohKalimat3 = "Cara belajar koding yang benar";
    $len = strlen($contohKalimat3);
    // 3. strtoupper() : mengubah seluruh teks menjadi besar
    $contohKalimat4 = "aku suka bahasa lamborghini";
    $upper = strtoupper($contohKalimat4);
    // 4. strtolower() : mengubah seluruh teks menjadi kecil
    $contohKalimat5 = "karena, aku adalah kira";
    $lower = strtolower($contohKalimat5);
    // 5. substr() : mengambil sebagian substring
    $contohKalimat6 = "Aku adalah seorang pelaut yang suka memancing ikan ikan";
    $sub = substr($contohKalimat6, 3, 8);
    ?>

    <!-- string concatenation -->
    <p><?php echo $namaLengkap ?></p>
    <p><?php echo $namaPanjang ?></p>

    <!-- pencarian string -->
    <p><?php echo $cariString ?></p>
    <p><?php echo $cariString2 ?></p>

    <!-- fungsi string lainnya -->
    <p><?php echo $rep ?></p>
    <p><?php echo $len ?></p>
    <p><?php echo $upper ?></p>
    <p><?php echo $lower ?></p>
    <p><?php echo $sub ?></p>
</body>

</html>