<?php
// looping

// 1. while
// $i = 1;
// echo "while loop <br>";
// while ($i <= 5) {
//     echo "Bernilai : $i <br>";
//     $i++;
// }

// // 2. do-while
// $j = 1;
// echo "<br> do-while <br>";
// do {
//     echo "Nilai : $j <br>";
//     $j++;
// } while ($j <= 5);

// // 3. for
// echo "<br> for <br>";
// for ($x = 1; $x <= 5; $x++) {
//     echo "Ini nilainya : $x <br>";
// }

// // 4. foreach 
// echo "<br> foreach <br>";
// $arr = ['mangga', 'durian', 'apel', 'semangka'];

// foreach ($arr as $buah) {
//     echo "Buahnya : $buah <br>";
// }

// // 5. break
// echo "<br> break <br>";
// for ($y = 1; $y <= 5; $y++) {
//     if ($y == 3) {
//         break; // berhenti sebelum angka 3
//     }
//     echo "Nilai : $y <br>";
// }

// // 6. continue
// echo "<br> continue <br>";
// for ($z = 1; $z <= 10; $z++) {
//     if ($z == 4) {
//         continue; // angka 4 nya ke skip, jadi abis 3 langsung ke 5
//     }
//     echo "Nilai : $z <br>";
// }

// // jika break dan continue digabungkan
// echo "<br> continue and break <br>";
// for ($xy = 1; $xy <= 20; $xy++) {
//     if ($xy == 6) {
//         continue; // skip angka 6
//     } elseif ($xy == 17) {
//         break; // berhenti di angka 16
//     }
//     echo "Nilai : $xy <br>";
// }

?>

<!-- // alternatif jika menggunakan html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternatif Syntax</title>
</head>

<body>
    <ul>
        <!-- <?php
                $arr = ['mangga', 'durian', 'apel', 'semangka'];
                foreach ($arr as $buah) {
                    echo "<li>Buahnya : $buah </li>";
                }
                ?> -->

        <!-- Alternatif Syntax -->
        <?php foreach ($arr as $buah): ?>
            <li>Buah : <?php echo $buah ?> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>