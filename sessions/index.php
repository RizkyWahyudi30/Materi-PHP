<?php
echo "Materi Session <br>";
// untuk memulai session
session_start();
$_SESSION['user_id'] = "Wahyu Jago";
$_SESSION['nim'] = "Indexing";
$_SESSION['test_del'] = "test for delete";

// mengambil data dari session
if (isset($_SESSION['user_id'])) {
    echo "User ID: " . $_SESSION['user_id'] . "<br>";
}

if (isset($_SESSION['nim'])) {
    echo "Nim: " . $_SESSION['nim'] . "<br>";
}

if (isset($_SESSION['test_del'])) {
    echo "Testing delete session: " . $_SESSION['test_del'] . "<br>";
}

// mau menghapus satu session :
unset($_SESSION['test_del']);
// bakal eror kalau mau di akses
// echo $_SESSION['test_del'];
// Warning: Undefined array key "test_del" in C:\xampp\htdocs\belajar-php\sessions\index.php on line 25

// mengakhiri seluruh ession
session_destroy();
$_SESSION = [];

echo $_SESSION['user_id'];
