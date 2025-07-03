    <?php
    session_start();
    $error = "";

    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        if (empty($name) || empty($email)) {
            $error = "Tidak sesuai";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email tidak sesuai";
        } else {
            $_SESSION['name'] = htmlspecialchars($name);
            $_SESSION['email'] = htmlspecialchars($email);

            header("Location: dashboard.php");
            exit();
        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>

    <body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">Login Page</h1>

                <?php if ($error): ?>
                <div
                    class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 border border-red-300 w-full max-w-sm text-center">
                    <?php echo $error ?>
                </div>
                <?php endif; ?>


                <form action="login.php" method="post" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name:</label>
                        <input type="text" name="name" id="name" placeholder="isi namamu"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                            value="<?php echo htmlspecialchars($_POST['name'] ?? '') ?>">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email:</label>
                        <input type="email" name="email" id="email" placeholder="contoh@email.com"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                            value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>">
                    </div>

                    <button type="submit" name="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors font-medium">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </body>

    </html>