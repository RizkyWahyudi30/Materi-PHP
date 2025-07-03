<?php
// server
echo "Materi Server <br>";

// foreach ($_SERVER as $key => $item) {
//     echo "<br> $key : $item";
// }

// menggunakan $_SERVER['PHP_SELF'] untuk mengarahkan :
// echo $_SERVER["PHP_SELF"];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST["name"];
} else {
    echo "bukan method post";
}




// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Variable Global</title>
</head>

<body>
    <!-- SEBELUMNYA ACTION DIISI DENAGAN NAMA FILE NYA, SEKARANG JADI SEPERTI INI : -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="name" id="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="name">
    </form>
</body>

</html>