<!-- PROJECT MINI - KALKULATOR -->
<!-- 
============= KETENTUAN ===========
Kalkulator memiliki dua input untuk memasukkan angka dan sebuah dropdown untuk memilih operator (tambah, kurang, kali, bagi, dll).
Saat pengguna mengklik tombol "Hitung", form akan dikirim ke server menggunakan metode POST

Validasi :
1. Validasi apakah input adalah angka (is_numeric)
2. Validasi pembagian dengan 0
-->

<?php
$result = '';

// untuk button hitung
if (isset($_POST['calculate'])) {
    $num1 = htmlspecialchars($_POST['num1']);
    $num2 = htmlspecialchars($_POST['num2']);
    $operator = $_POST['operator'];

    // validasi dengan is_numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        // untuk menangani pemilihan operatir dengan switch case
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error!";
                }
                break;
        }
    } else {
        $result = "Angka tidak valid!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project - Kalkulator</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center">
    <div class="calculator-container bg-white p-6 rounded-lg shadow-md w-full max-w-sm">
        <h1 class="text-xl font-semibold text-center mb-4">Kalkulator Sederhana</h1>

        <form action="index.php" class="calculator-form space-y-4" method="post">
            <input type="text" name="num1" id="num1" placeholder="Angka 1"
                class="w-full px-3 py-2 border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300"
                value="<?php echo isset($_POST['num1']) ? $_POST["num1"] : '' ?>">
            <!-- ini untuk memvalidasi agar angka tetap ada -->
            <input type="text" name="num2" id="num2" placeholder="Angka 2"
                class="w-full px-3 py-2 border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300"
                value="<?php echo isset($_POST['num2']) ? $_POST["num2"] : '' ?>">
            <!-- ini untuk memvalidasi agar angka tetap ada -->

            >

            <select name="operator" class="operator" id="operator"
                class="operator w-full px-4 py-2 border border-gray-300 rounded bg-white focus:outline-none focus:ring focus:ring-blue-300">
                <option <?php echo isset($_POST['operator']) && $_POST['operator'] == 'add' ? "selected" : ""  ?>
                    value="add">Add</option>
                <option <?php echo isset($_POST['operator']) && $_POST['operator'] == 'subtract' ? "selected" : "" ?>
                    value="subtract">Subtract</option>
                <option <?php echo isset($_POST['operator']) && $_POST['operator'] == 'multiply' ? "selected" : "" ?>
                    value="multiply">Multiply</option>
                <option <?php echo isset($_POST['operator']) && $_POST['operator'] == 'divide' ? "selected" : "s" ?>
                    value="divide">Divide</option>
            </select>

            <button type="submit" name="calculate"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">>Hitung</button>
        </form>

        <div class="mt-4 text-center font-medium">Result: <?php echo htmlspecialchars($result) ?> </div>
    </div>
</body>

</html>