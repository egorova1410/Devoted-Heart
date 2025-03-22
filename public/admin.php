<?php
include "core.php";

if (isset($_POST['password'])) {
    $res = $link->query("SELECT * FROM `admin` WHERE `password` = '{$_POST['password']}'");
    if ($res->num_rows > 0) {
        $_SESSION['admin'] = 1;
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
    <?php
    if (!isset($_SESSION['admin'])) {
    ?>
        <div class="grid-container">
            <div id="one">
                <div class="navbar">
                    <div class="icon">
                        <a class="nav-link active" href="../index.php">
                            <img src="../assets/pet-care.png" style="max-height: 50px;"></a>
                    </div>
                    <div class="nav nav-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="../index.php">Главная</a>
                            </li>
                            <?php
                            if (isset($id)) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Выйти</a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <form class="admin_form" action="" method="post">
            <input type="password" name="password" placeholder="password" required>
            <br><br>
            <button type="submit">Войти</button>
        </form>
    <?php
    } else {
    ?>
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
                            <?php
                            if (isset($_SESSION['admin'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Выйти</a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <form class="admin_form">
            <a href="add.php">Добавить питомца</a>
            <a href="delete.php">Удалить питомца</a>

        </form>
    <?php
    }
    ?>
</body>

</html>