<?php
$result = '';

if (isset($_POST['calculate'])) {
    $num1 = htmlspecialchars($_POST['num1']);
    $num2 = htmlspecialchars($_POST['num2']);
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
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
                $result = $num1 / $num2;
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
    <title>Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm card-shadow p-4 w-100" style="max-width: 400px;">
            <h1 class="text-center fs-3 text mb-4">Kalkulator Sederhana</h1>
            <form class="" action="kalkulator.php" method="post">
                <input type="text" class="form-control mb-3" name="num1" id="num1" placeholder="Angka Pertama"
                    value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : "" ?>">
                <!-- ini untuk memvalidasi agar angka tetap ada -->
                <input type="text" class="form-control mb-3" name="num2" id="num2" placeholder="Angka Kedua"
                    value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : "" ?>">
                <!-- ini untuk memvalidasi agar angka tetap ada -->


                <select name="operator" id="operator" class="operator form-select mb-4 w-50">
                    <option <?php echo isset($_POST['operator']) && $_POST['operator'] == 'add' ? 'selected' : '' ?>
                        value="add">Add</option>
                    <option
                        <?php echo isset($_POST['operator']) && $_POST['operator'] == 'subtract' ? 'selected' : '' ?>
                        value="subtract">Subtract</option>
                    <option
                        <?php echo isset($_POST['operator']) && $_POST['operator'] == 'multiply' ? 'selected' : '' ?>
                        value="multiply">Multiply</option>
                    <option <?php echo isset($_POST['oerator']) && $_POST['operator'] == 'divide' ? 'selected' : '' ?>
                        value="divide">Divide</option>
                </select>

                <button type="submit" name="calculate" class="btn btn-primary w-100">Hitung</button>
            </form>

            <div class="text-center my-3">Result: <?php echo htmlspecialchars($result) ?></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>