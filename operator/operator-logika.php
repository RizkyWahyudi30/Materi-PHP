<?php
echo "Ini Materi Operator Logika";

// operator logika
// ================================
// operator AND
$x = true;
$y = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>

<body>
    <p>Latihan operator logika</p>
    <p>Kita akan memulai :</p>
    <ol>
        <li>
            Operator AND (&&)
            <ul>
                <li>true && true = <?php var_dump($x && $x) ?></li>
                <li>true && false = <?php var_dump($x && $y) ?></li>
                <li>false && true = <?php var_dump($y && $x) ?></li>
                <li>false && false = <?php var_dump($y && $y) ?></li>
            </ul>
        </li>
        <li>
            Operator OR (||)
            <ul>
                <li>true || true = <?php var_dump($x || $x) ?></li>
                <li>true || false = <?php var_dump($x || $y) ?></li>
                <li>false || true = <?php var_dump($y || $x) ?></li>
                <li>false || false = <?php var_dump($y || $y) ?></li>
            </ul>
        </li>
        <li>
            Operator NOT (!)
            <ul>
                <li>!true = <?php var_dump(!$x) ?></li>
                <li>!false = <?php var_dump(!$y) ?></li>
            </ul>
        </li>
        <li>
            Operator XOR (xor)
            <ul>
                <li>true xor true = <?php var_dump($x xor $x) ?></li>
                <li>true xor false = <?php var_dump($x xor $y) ?></li>
                <li>false xor true = <?php var_dump($y xor $x) ?></li>
                <li>false xor false = <?php var_dump($y xor $y) ?></li>
            </ul>
        </li>
    </ol>
</body>

</html>