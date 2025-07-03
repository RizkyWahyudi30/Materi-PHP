<?php
// untuk pengguna berpindah tempat
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (empty($name) || empty($email)) {
        $error = "Name dan Email Harus diisi!";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid";
    } else {
        $_SESSION['name'] = htmlspecialchars($name);
        $_SESSION['email'] = htmlspecialchars($email);

        header("Location: kalkulator.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page PHP</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    .card-hover:hover {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.15);
        transition: box-shadow .3s ease-in-out;
    }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm card-shadow p-4 w-100" style="max-width: 400px;">

            <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?php echo $error ?></div>
            <?php endif; ?>

            <h1 class="text-center fs-3 text mb-4">Login to Kalkulator</h1>
            <form class="" action="login.php" method="post">
                <!-- name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name: </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Isi nama kamu">
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Isi email kamu">
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>