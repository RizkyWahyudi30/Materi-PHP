<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <form style="display: flex; flex-direction: column; gap: 5px;" action="index.php" method="post">
        <div>
            <label for="name">Nama: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <input style="width: 200px;" type="submit" value="kirim">
    </form>
</body>

</html>

<?php
// VALIDASI INPUT
// menggunakan htmlspecialchars() untuk menghindari xss

// with empty()

if (empty($_POST['name'])) {
    echo "Nama Harus Diisi! <br>";
} else {
    echo htmlspecialchars($_POST['name'])  . "<br>";
}

// VALIDASI EMAIL DENGAN FILTER_VALIDATE_EMAIL
if (empty($_POST['email'])) {
    echo "Email Harus Diisi!";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Email Tidak Valid";
} else {
    echo htmlspecialchars($_POST['email']) . "<br>";
}
// gunanya untuk menghindari user yang mengisi => r@ass | karena jika tidak dengan validasi email, akan terdeteksi


// with isset()

// if (!isset($_POST['name'])) { // isset jika ada variable maka true, jika empty => jika tidak ada, maka true, maka dari itu pakai not(!)  
//     echo "Nama Harus Diisi! <br>";
// } else {
//     echo $_POST['name'] . "<br>";
// }

// if (empty($_POST['email'])) {
//     echo "Email Harus Diisi!";
// } else {
//     echo $_POST['email'] . "<br>";
// }

// KALAU PAKE METHOD $_GET
// name=kiyu&email=kiyu%40gmail.com
// itu contoh query string
?>