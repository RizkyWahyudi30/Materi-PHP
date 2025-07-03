<?php
echo "Materi Array <br>";

// array
$buah = ["Pisang", "Jeruk", "Manggis", "Durian"];
print_r($buah);

echo "<br>";

// dengan array()
$sayur = array("Bayem", "Daun Singkong", "Daun Pepaya", "Timun");
print_r($sayur);

echo "<br>";

// kita juga bisa mengakses value dalam array nya dengan :
echo $buah[1]; // ambil jeruk
echo "<br>";
// echo $sayur[4]; // akan eror, karena engga sampe 4
echo $sayur[3]; // timun
echo "<br>";

// Array Asosiatif (key : value) :
$identitas = [
    "Dwi" => 19,
    "Ian" => 21,
    "Denis" => 17,
];
print_r($identitas);
echo "<br>";
// akses nya
echo $identitas['Denis']; // 17
echo "<br>";
echo $identitas['Dwi']; // 19
echo "<br>";
echo $identitas['Ian']; // 21
echo "<br>";


// Array Multidimensi / array nested :
$profil = [
    ["Dwi", 19, "Bandung"],
    ["Ian", 21, "Jakarta"],
    ["Denis", 17, "Bogor"]
];
print_r($profil);
echo "<br>";
// akses 
echo $profil[1][0];
echo "<br>";
echo $profil[2][2];
echo "<br>";

// atau bisa seperti ini :
$buah2 = [
    ["nama" => "Jeruk", "Harga" => 14000], // ini index 0
    ["nama" => "Mangga", "Harga" => 13000], // ini index 1
    ["nama" => "Markisa", "Harga" => 21000],
    ["nama" => "Manggis", "Harga" => 20000],
    ["nama" => "Kelengkeng", "Harga" => 14000],
    ["nama" => "Durian", "Harga" => 34000]
];
echo "<br>";
print_r($buah2);
echo "<br>";

// akses array nested :
echo $buah2[2]["Harga"]; // markisa => 21000
echo "<br>";
echo $buah2[4]["nama"]; // kelengkeng
echo "<br>";

// built in function dalam array
$angka = [3, 5, 2, 6, 2, 8, 1];
// menggunakan sort untuk mengurutkan
sort($angka);
print_r($angka);
echo "<br>";

// meggabungkan dua array
$arr1 = ["Pisang", "goreng"];
$arr2 = ["enak", "banget"];
$gabung = array_merge($arr1, $arr2);
print_r($gabung);
echo "<br>";

// menghitung jumlah elemen di dalam array dengan count
$arrCou = [
    "nama" => "Wahyu", // elemen 1
    "umur" => 17, // elemen 2
    "status" => "bersekolah", // elemen 3
];
$testingArr = count($arrCou);
print_r($testingArr);
echo "<br>";
// bagaimana jika dengan array nested

$arrNested = [
    ["nama" => "Wahyu", "asal" => "Cipinang Muara", "status" => "Bersekolah"],
    ["nama" => "Budiman", "asal" => "Jember", "status" => "Pekerja"],
    ["nama" => "Setiabudi", "asal" => "Pontianak", "status" => "Mahasiswa"]
];
$testingArr2 = count($arrNested);
print_r($testingArr2); // tetap kehitungnya 3, jadi tidak masuk ke array dalamnya lagi
echo "<br>";

// mengecek elemen di dalam array menggunakan in_array
$hobi1 = ["bultang", "lari", "boxing"];
$hobi2 = ["panco", "sepedahan", "ngoding"];
// menggunakan conditional statements
if (in_array("berenang", $hobi1)) {
    echo "Iya, wahyu suka lari";
} elseif (in_array("panco", $hobi1)) {
    echo "Iya, suka panco juga";
} elseif (in_array("mancing", $hobi2)) {
    echo "Nah, di hobi kedua ada panco";
} else {
    echo "ga ada satupun";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tested array</title>
</head>

<body>
    <hr>
    <ul>
        <!-- looping array assosiatif lebih gampang karena terdapat key
            terutama untuk data kompleks
        -->
        <?php foreach ($buah2 as $item):  ?>
            <li>Nama : <?php echo $item["nama"] ?></li>
            <li>Harga : <?php echo $item["Harga"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>