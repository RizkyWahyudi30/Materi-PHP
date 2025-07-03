<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-List</title>
</head>

<body>
    <div class="todo-container">
        <h1>To-do List</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="task" id="task" placeholder="Tambahkan tugas">
            <button type="submit" name="add">Tambah</button>
        </form>

        <?php
        session_start();

        // inisialisasi array task jika belom ada
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        // cek jika ada form yang di submit, maka akan menambahkan todo ke daftar task
        if (isset($_POST['add'])) {
            $task = trim($_POST['task']);

            if (!empty($task)) {
                // menambahkan task ke session array tasks
                $_SESSION['tasks'][] = $task;
            }

            // redirect untuk menghindari resubmission saat refresh
            header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']));
            exit();
        }

        // jika ada request untuk menghapus task / todo
        if (isset($_POST['delete'])) {
            $index_to_del = $_POST['delete'];
            if (isset($_SESSION['tasks'])) {
                unset($_SESSION['tasks'][$index_to_del]);
                // reset index array setelah penghapusan
                $_SESSION['tasks'] = array_values($_SESSION['tasks']);
            }
            header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']));
            exit();
        }
        ?>

        <ul class="todo-list">
            <?php foreach ($_SESSION['tasks'] as $index => $task):  ?>
                <li>
                    <?php echo htmlspecialchars($task) ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <input type="hidden" name="delete" value="<?php echo $index ?>">
                        <button type="submit">Hapus</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>