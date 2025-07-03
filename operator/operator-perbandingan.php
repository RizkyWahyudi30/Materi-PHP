<?php
echo "Ini Materi Operator Perbandingan" . "<br>";

// operator perbandingan = mengeluarkan nilai true / false
$a = 4;
$b = 8;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>

<body>
    <p>Angka nya $a : <?php echo $a ?></p>
    <p>Angka nya $b : <?php echo $b ?></p>

    <ul>
        <li>Sama dengan (==) : <?php var_dump($a == $b) ?></li>
        <li>Tidak sama dengan (!==) : <?php var_dump($a != $b) ?></li>
        <li>Identik (===) : <?php var_dump($a === $b) ?></li>
        <li>Tidak identik (!==) : <?php var_dump($a !== $b) ?></li>
        <li>Lebih besar dari (>) : <?php var_dump($a > $b)  ?></li>
        <li>Lebih kecil dari (<) : <?php var_dump($a < $b) ?></li>
        <li>Lebih besar sama dengan (>=) : <?php var_dump($a >= $b) ?></li>
        <li>Lebih kecil sama dengan (<=) : <?php var_dump($a <= $b) ?></li>
    </ul>
</body>

</html>