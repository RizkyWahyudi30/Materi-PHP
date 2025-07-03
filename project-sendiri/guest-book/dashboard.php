<?php
// mulai start session
session_start();
$result = "";

// untuk kode kalkulator :
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
        $result = "Tidak valid";
    }
}

// untuk kode to=do list
// untuk inisialisasi array task jika belom ada 

// jika variable tasks belom ada  
if (!isset($_SESSION['tasks'])) {
    // maka buat variable tasks yang dapat menyimpan data dalam berbentuk array
    $_SESSION['tasks'] = [];
}

// awalan nya untuk memulai 
if (isset($_POST['add'])) {
    $task = trim($_POST['task']);

    // membuat kondisi jika variable task ada dan tidak kosong, maka akan dimasukkan ke dalam array tasks tadi
    if (!empty($task)) {
        $_SESSION['tasks'][] = $task;
    }

    // redirect untuk menghindari resubmission saat refresh
    header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']));
    exit();
}

// membuat variable untuk request delete
if (isset($_POST['delete'])) {
    $indexDelete = $_POST['delete'];

    // mengecek jika variable tasks yang di dalamnya ada menyimpan data
    if (isset($_SESSION['tasks'])) {
        // menggunakan unset untuk menghapus task yang terisi berdasarkan index
        unset($_SESSION['tasks'][$indexDelete]);


        // me-reset index array agar reapih setelah dihapus 
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
    // redirect agar halaman tidak mengulang aksi / mengirimkan todo yang sama ketika halaman di refersh
    header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative bg-blue-600 min-h-screen overflow-hidden flex items-center justify-center px-4">

    <!-- Gradient curves like in your image -->
    <div class="absolute -top-40 -left-40 w-[800px] h-[800px] bg-blue-400 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] bg-blue-300 rounded-full opacity-20 blur-2xl"></div>
    <div class="z-10 flex gap-10 p-6 flex-wrap justify-center">

        <!-- Kalkulator -->
        <div class="bg-white shadow-xl rounded-lg p-6 w-72">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Kalkulator Testing</h2>
            <p class="text-sm text-gray-600 mb-4">Enter the numbers you want to calculate</p>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="space-y-3">
                <div>
                    <input type="text" name="num1" id="num1" placeholder="First number"
                        value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : "" ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" />
                </div>
                <div>
                    <input type="text" name="num2" id="num2" placeholder="Second number"
                        value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : "" ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" />
                </div>

                <select name="operator" id="operator"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    <option <?php echo isset($_POST['operator']) && $_POST['operator'] == "add" ? "selected" : ""  ?>
                        value="add">Add</option>
                    <option
                        <?php echo isset($_POST['operator']) && $_POST['operator'] == "subtract" ? "selected" : ""  ?>
                        value="subtract">Subtract</option>
                    <option
                        <?php echo isset($_POST['operator']) && $_POST['operator'] == "multiply" ? "selected" : ""  ?>
                        value="multiply">Multiply</option>
                    <option <?php echo isset($_POST['operator']) && $_POST['operator'] == "divide" ? "selected" : ""  ?>
                        value="divide">Divide</option>
                </select>

                <button type="submit" name="calculate"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Calculate
                </button>
            </form>

            <div class="mt-4 text-center font-semibold text-blue-700">Result: <?php echo htmlspecialchars($result) ?>
            </div>
        </div>

        <!-- To-Do List -->
        <div class="bg-white shadow-xl rounded-lg p-6 w-72">
            <h2 class="text-xl font-bold text-gray-800 mb-2">To-Do List</h2>
            <p class="text-sm text-gray-600 mb-4">Fill your days with regular and focused planning</p>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="space-y-3">
                <input type="text" name="task" id="task" placeholder="Add your task"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" />
                <button type="submit" name="add"
                    class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300">
                    Add
                </button>
            </form>

            <ul class="mt-4 space-y-3">
                <?php foreach ($_SESSION['tasks'] as $indexdel => $task): ?>
                    <li class="flex items-center justify-between bg-gray-100 px-4 py-2 rounded-lg shadow-sm">
                        <span class="text-gray-800"><?php echo htmlspecialchars($task) ?></span>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                            <input type="hidden" name="delete" value="<?php echo $indexdel ?>">
                            <button type="submit"
                                class="ml-4 px-3 py-1 bg-red-500 text-white rounded-md text-sm hover:bg-red-600 transition duration-200">
                                Hapus
                            </button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>

    </div>
</body>

</html>