<?php
include "core.php";

if (!empty($_FILES["img"])) {
    $files = $_FILES["img"];
    if ($files["error"] === UPLOAD_ERR_OK) { //Проверка, что ошибок нет
        $fileType = mime_content_type($files["tmp_name"]);
        if ($fileType !== "image/jpeg" && $fileType !== "image/png") {
            die("Неверный тип файла");
        }
        $img = $files["name"];
        $destination = "../assets/pets/" . $img;
        if (move_uploaded_file($files["tmp_name"], $destination)) {

            $pets = $link->query("INSERT INTO `pets`(`name`, `age`, `img`) VALUES ('{$_POST['name']}','{$_POST['age']}','$img')");
            header("Location: admin.php");
        } else {
            echo "Ошибка при перемещении файла."; // Дополнительная информация
        }
    } else {
        echo "Ошибка при загрузке файла: " . $files["error"]; //Вывод кода ошибки
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../bootstrap-5.1.3-dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/adopt.css">
</head>

<body>
    <div class="grid-container">
        <div id="one">
            <div class="navbar">
                <div class="icon">
                    <a class="nav-link active" href="../index.php"><img src="../assets/pet-care.png" style="max-height: 50px;"></a>
                </div>
                <div class="nav nav-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin.php">Назад</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Выйти</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form action="" class="admin_form" method="post" enctype="multipart/form-data">
        <h1>Добавить питомца</h1>
        <input type="text" name="name" placeholder="имя питомца" required>
        <br><br>
        <input type="text" name="age" placeholder="возраст" required>
        <br><br>
        <input type="file" name="img" required>
        <br><br>
        <button type="submit">Добавить</button>
    </form>
</body>