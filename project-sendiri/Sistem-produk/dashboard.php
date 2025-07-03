<?php
session_start();

// if ()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-blue-50 min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Halo, <?php echo $_SESSION['name']; ?>!</h1>
        <p class="mb-6 text-gray-600">Email: <strong><?php echo $_SESSION['email']; ?></strong></p>

        <form method="post" class="mb-6">
            <button type="submit" name="logout" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>

        <h2 class="text-xl text-center font-bold mb-4">Daftar Produk</h2>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-600 uppercase text-sm">
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Nama Produk</th>
                    <th class="py-2 px-4 border">Tipe Produk</th>
                    <th class="py-2 px-4 border">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr class="border-t text-gray-700">
                        <td class="py-2 px-4 border"><?php echo $product['id']; ?></td>
                        <td class="py-2 px-4 border"><?php echo $product['name']; ?></td>
                        <td class="py-2 px-4 border"><?php echo $product['tipe']; ?></td>
                        <td class="py-2 px-4 border">Rp<?php echo number_format($product['harga'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>