<?php
// membuat cookie nya
setcookie("user_id", "e231#sa", time() + (86400 * 30), "/");

// catch cookie nya
if (isset($_COOKIE['user_id'])) {
    echo $_COOKIE['user_id'];
} else {
    echo "cookie tidak ditemukan";
}

// delete cookie dengan -
setcookie("user_id", "e231#sa", time() - (86400 * 30), "/");
