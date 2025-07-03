<?php
// start session 
session_start();
// validasi error
$error = '';

// pengkondisian untuk input username, email, dan password :
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // membuat kondisi untuk ketiga input harus diisi dengan benar :
    if (empty($username) || empty($email) || empty($password)) {
        $error = "Tidak sesuai ketentuan";
        // buat validasi dengan filter_var() dan FILTER_VALIDATE_EMAIL jika tidak sesuai ketentuan
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Bukan seperti ini";
    } else {
        $_SESSION['username'] = htmlspecialchars($username);
        $_SESSION['email'] = htmlspecialchars($email);
        $_SESSION['password'] = htmlspecialchars($password);

        header("Location: dashboard.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-pink-100 via-white to-blue-100 px-4">

    <?php if ($error): ?>
    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 border border-red-300 w-full max-w-sm text-center">
        <?php echo $error ?>
    </div>
    <?php endif; ?>


    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">LEARN PHP</h1>
        <p class="text-gray-600 mt-2">Learn backend with PHP language starting from 0</p>
    </div>

    <div class="bg-white shadow-xl rounded-xl p-6 w-full max-w-sm">
        <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Login Account</h2>

        <form action="index.php" method="post" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" placeholder="Fill in your username"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="Fill in your email"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="One-time password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" />
            </div>

            <button type="submit" name="login"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-300">
                Start
            </button>
        </form>
    </div>

</body>

</html>