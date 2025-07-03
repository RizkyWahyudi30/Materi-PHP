<?php
echo "CONDITIONAL STATEMENTS";

// if else, else if
$nilai = 86;
/**
 * jika nilai >= 90, Grade A
 *  => jika nilai >= 80, Grade B
 *     => selain itu, maka Grade C
 */

// switch-case
$warna = "biru";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>

<body>
    <h3>Conditional Statements : if else, else if</h3>

    <p>Kita mempunyai nilai: <?php echo $nilai ?></p>

    <p>Jikai nilai >= 90, Grade A</p>
    <p>Jikai nilai >= 80, Grade B</p>
    <p>Selain itu, maka Grade C</p>

    <!-- <p>Hitung :
        <?php
        if ($nilai >= 90) {
            echo "Grade A";
        } elseif ($nilai >= 80) {
            echo "Grade B";
        } else {
            echo "Grade C";
        }
        ?>
    </p> -->

    <hr>
    <p>Dengan cara yang lain.</p>
    <!-- <div>
        <p>Hitung : </p>
        <?php if ($nilai >= 90): ?>
            <h3>Grade A</h3>
        <?php elseif ($nilai >= 80): ?>
            <h3>Grade B</h3>
        <?php else: ?>
            <h3>Grade C</h3>
        <?php endif; ?>
    </div> -->

    <hr>

    <p>Dengan Switch Case</p>
    <p>Warna :
        <?php
        switch ($warna):
            case "merah":
                echo "Ini warna merah";
                break;
            case "biru":
                echo "Ini warna biru";
                break;
            case "kuning":
                echo "Ini warna kuning";
                break;
            default:
                echo "Ga ada satupun";
        endswitch;
        ?>
    </p>

</body>

</html>