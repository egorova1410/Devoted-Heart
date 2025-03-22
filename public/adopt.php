<?php
include "core.php";

if (isset($_SESSION['user'])) {
  $id = $_SESSION['user']['id'];

  $adopted_pets_count = $link->query("SELECT * FROM `pet_owners` WHERE `user_id` = '$id'");

  if ($adopted_pets_count->num_rows > 0) {
    $adopted_pets = [];
    $all_pets = [];
    $pets_list_old = $link->query("SELECT `id` FROM `pets` WHERE 1");

    if ($pets_list_old && $pets_list_old->num_rows > 0) {
      while ($pet = $pets_list_old->fetch_assoc()) {
        $all_pets[] = $pet['id'];
      }

      $adopted_pets = [];
      while ($pet = $adopted_pets_count->fetch_assoc()) {
        $adopted_pets[] = $pet['pet_id'];
      }

      if (isset($all_pets)) {
        $pets_list_id = array_diff($all_pets, $adopted_pets);
      }
    }
  } else {
    $pets_list = $link->query("SELECT * FROM `pets` WHERE 1");
  }
} else {
  $pets_list = $link->query("SELECT * FROM `pets` WHERE 1");
}

if ($_GET) {
  $pet_id = $_GET['pet_id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt me</title>
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
              <a class="nav-link" href="browse.html">Галерея</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#four">Наши контакты</a>
            </li>
            <?php
            if (isset($id)) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Выйти</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a class="Fontdiz" href="details.html">Вoйти</a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="two">
      <h2>ДЛЯ ЧЕГО НУЖНЫ ДОМАШНИЕ ПИТОМЦЫ?</h2>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <div class="box">
            <p><strong>Вы спасаете их жизни</strong><br> Животные в нашем приюте нуждаются во втором шансе. Вы можете подарить им новую жизнь в любящем доме.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="boxtwo">
            <img src="../assets/pet-house.png" class="logotwo" alt="">
            <img src="../assets/pet-house (1).png" class="logohidden" alt="">
            <br>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box">
            <p><strong>Взрослые питомцы – это здорово!</strong> <br>Часто они уже приучены к дому, а некоторые даже знают различные команды. Также вы можете узнать их характер</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="box">
            <p><strong>Низкие траты за усыновление:</strong><br> Плата за усыновление домашних животных намного меньше, чем стоимость чистокровных щенков или котят, продаваемых с целью получения прибыли.</p>
          </div>
        </div>
        <div class="col-sm-4" id="dogicon">
        </div>
        <div class="col-sm-4">
          <div class="box">
            <p><strong>Доступ к поддержке и ресурсам</strong><br> Наши ветеринары будут осматривать домашних животных бесплатно в течение 12 месяцев после усыновления в рамках усыновления.</p>
          </div>
        </div>
      </div>
    </div>



    <div id="three">
      <div class="adopted">
        <?php
        if (isset($adopted_pets)) {
          foreach ($adopted_pets as $pets_id) {
            $pets = $link->query("SELECT * FROM `pets` WHERE `id` = '$pets_id'");
            foreach ($pets as $pet) {
        ?>
              <div class="">
                <div class="card_adopted">
                  <div class="card-header">
                    <h2><?= $pet['name'] ?></h2>
                  </div>
                  <div class="card-footer">
                    <p>Питомец ожидает вас в приюте!</p>
                  </div>
                </div>
              </div>
        <?php
            }
          }
        }
        ?>
      </div>
      <hr>
      <div class="row" id="cats">
        <?php

        if (isset($pets_list_id)) {
          foreach ($pets_list_id as $pet_id) {
            $res = $link->query("SELECT * from `pets` where `id` = $pet_id");
            $pet = $res->fetch_assoc();
        ?>
            <div class="col">
              <div class="card" id="kiwi">
                <div class="card-header"><?= $pet['name'] ?></div>
                <div class="card-body"><img src="<?php echo "../assets/pets/" . $pet['img']; ?>" alt="cat" class="img-fluid"></div>
                <div class="card-footer">

                  <form action="get_pet.php" method="post">
                    <input type="hidden" name="pet_id" value="<?= $pet['id']; ?>">
                    <button type="submit" class="btn btn-success">Приюти меня</button>
                  </form>

                </div>
              </div>
            </div>
          <?php
          }
        } else {
          $res = $link->query("SELECT * from `pets`");
          foreach ($res as $pet) {
          ?>
            <div class="col">
              <div class="card" id="kiwi">
                <div class="card-header"><?= $pet['name'] ?></div>
                <div class="card-body"><img src="<?php echo "../assets/pets/" . $pet['img']; ?>" alt="cat" class="img-fluid"></div>
                <div class="card-footer">
                  <form action="get_pet.php" method="post">
                    <input type="hidden" name="pet_id" value="<?= $pet['id']; ?>">
                    <button type="submit" class="btn btn-success">Приюти меня</button>
                  </form>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
        <br>

      </div>
      <div id="four" class="container-fluid">
        <div class="row pt-5">
          <div class="col-md-4">
            <div class="mobile">
              <h5 style="font-family: 'Oswald', sans-serif">Наши контакты:</h5>
              <p style="font-family: 'Oswald', sans-serif">89048279854</p>
              <p style="font-family: 'Oswald', sans-serif">89056279854</p>
              <p style="font-family: 'Oswald', sans-serif">89048223854</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mobile">
              <h5>Социальные сети:</h5>
              <p><i class="fab fa-twitter"></i></p>
              <p><i class="fab fa-youtube"></i></p>
              <p><i class="fab fa-instagram"></i></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mobile">
              <h5 style="font-family: 'Oswald', sans-serif">Почта:</h5>
              <p><a href="#" class="textnone">devotedheart@gmail.com</a></p>
              <p><a href="#" class="textnone">quilmairt@gmail.com</a></p>
              <p><a href="#" class="textnone">supportheart@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/58d00c94d4.js" crossorigin="anonymous"></script>
    <script src="../js/adopt.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>