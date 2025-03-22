<?php
include "core.php";

if ($_POST) {
    $user = $link->query("SELECT * FROM `users` WHERE `phone` = '{$_POST['phone']}'");

    if ($user->num_rows > 0) {
        $value = $user->fetch_assoc();
        $_SESSION['user']['id'] = $value['id'];
        header("Location: adopt.php");
    } else {
        $res = $link->query("INSERT INTO `users`(`name`, `phone`, `email`) VALUES ('{$_POST['name']}','{$_POST['phone']}','{$_POST['email']}')");
        if ($res) {
            $user = $link->query("SELECT * FROM `users` WHERE `phone` = '{$_POST['phone']}'");
            $value = $user->fetch_assoc();
            $_SESSION['user']['id'] = $value['id'];
            header("Location: adopt.php");
        }
    }
}
