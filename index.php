<?php
include "public/core.php";

if (isset($_SESSION['user'])) {
  $id = $_SESSION['user']['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- <script src="https://kit.fontawesome.com/58d00c94d4.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <title>Devoted Heart</title>
</head>

<body>
  <div class="container-fluid">
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img class="logoImg" src="assets/images/logo.png" alt="logo">Devoted Heart</label>
      <ul>
        <li><a class="active" href="#">Главная</a></li>
        <li><a href="#about" class="Fontdiz">О нас</a></li>
        <li><a href="#services" class="Fontdiz">Сервис</a></li>
        <li><a href="#pFooter" class="Fontdiz">Контакты</a></li>
        <li><a href="public/adopt.php" class="Fontdiz">Взять питомца</a></li>
        <?php
        if (isset($id)) {
        ?>
          <li class="nav-item">
            <a class="Fontdiz" href="public/logout.php">Выйти</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="Fontdiz" href="public/details.html">Вoйти</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="item active">

          <a class="left carousel-control height" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          <img src="assets/images/bethowen.jpeg" alt="pets.people connection" style="width:100%;">
          <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 50px; padding-bottom: 5px; color: yellow; font-family: 'Oswald', sans-serif;">Связь между домашними животными и людьми</h3>
            <p style="font-weight: bold; font-size: 20px; font-family: 'Oswald', sans-serif">Ничто не сравнится с безусловной любовью домашнего животного.
              Они проявляют к вам привязанность, дают вам чувство цели и приветствуют вас каждый день, когда вы
              возвращаетесь домой (ну, может быть, нет, если у вас есть кошка). Но опять же, кошки самые ласковые из
              всех.
            </p>
          </div>
        </div>

        <div class="item">

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          <img src="assets/images/zolter.jpeg" alt="Chicago" style="width:100%;">
          <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 50px; padding-bottom: 5px; color: yellow; font-family: 'Oswald', sans-serif">Высокие стандарты</h3>
            <p style="font-weight: bold; font-size: 20px; font-family: 'Oswald', sans-serif">Есть такая поговорка. Если вы хотите, чтобы кто-то любил вас
              вечно, купите собаку, кормите ее и держите рядом». Эти милые «штучки» будут любить вас вечно. Больше, чем
              вы любите себя.</p>
          </div>
        </div>

        <div class="item">

          <a class="left carousel-control height" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          <img src="assets/images/orig.jpg" alt="New York" style="width:100%;">
          <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 50px; padding-bottom: 5px; color: yellow; font-family: 'Oswald', sans-serif">Они прекрасные люди</h3>
            <p style="font-weight: bold; font-size: 20px; font-family: 'Oswald', sans-serif">«Домашние животные очеловечивают. Они напоминают нам о том,
              что у нас есть обязанность и ответственность за сохранение, воспитание и заботу обо всем живом». Животные
              такие приятные друзья, они не задают вопросов; Они не выдерживают никакой критики.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  <section id="about" class="about">
    <div class="main">
      <img src="assets/images/owner1.jpg" alt="">
      <div class="all-text">
        <h4 style="font-family: 'Oswald', sans-serif">О нас</h4>
        <h1 style="font-family: 'Oswald', sans-serif">Дом для всех Ваших питомцев</h1>
        <p style="font-family: 'Oswald', sans-serif">Бродячие, брошенные без присмотра или отданные в приют животные составляют большую часть собак и кошек в нашем приюте. Все
          найденные таким образом животные содержатся в приюте "Devoted Heart" в течение одного месяца. Этот период является своего рода карантином.
          Затем приют должен уведомить вас, когда животное будет готово к усыновлению.</p>
        <div class="btn">
          <button id="teamBtn" type="button" style="font-family: 'Oswald', sans-serif">Наша команда</button>
          <a href="public/adopt.php"><button type="button" class="btn2">Взять питомца</button></a>
        </div>
      </div>
    </div>
  </section>

  <div class="team-area">
    <div class="section-title">
      <h1 style="font-family: 'Oswald', sans-serif">Наши специалисты</h1>
    </div>
    <div class="team-box">
      <div class="box">
        <img src="assets/images/doctor.png" alt="">
        <h2 style="font-family: 'Oswald', sans-serif">Марина Подоляко</h2>
        <span style="font-family: 'Oswald', sans-serif;">Ветеринар</span>
        <ul>
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
      <div class="box">
        <img src="assets/images/doctor.jpeg" alt="">
        <h2 style="font-family: 'Oswald', sans-serif">Виталий Мерзляк</h2>
        <span style="font-family: 'Oswald', sans-serif">Ветеринар</span>
        <ul>
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
      <div class="box">
        <img src="assets/images/doctor2.jpeg" alt="">
        <h2 style="font-family: 'Oswald', sans-serif">Анастасия Камергер</h2>
        <span style="font-family: 'Oswald', sans-serif">Ветеринар</span>
        <ul>
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <section id="services" class="service-panel">
    <div class="container">
      <h3 style="padding-bottom:20px; font-family: 'Oswald', sans-serif">Услуги</h3>
      <div class="row">
        <div class="col-md-4 col-sm-6j col-xs-12">
          <div class="service-content">
            <div class="img-box">
              <a href="#"><img src="assets/images/dress.jpg" alt=""></a>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <a href="#"><img style="height:36px; width:36px;" src="assets/images/paw.jpg" alt=""></a>
              </div>
              <h3><a href="#" style="font-family: 'Oswald', sans-serif">Груминг и дрессировка</a></h3>
              <div class="designation">
              </div>
              <div class="text" style="font-family: 'Oswald', sans-serif">
                Наш пакет груминга состоит из гидромассажной ванны, стрижки когтей, стрижки шерсти, санитарной стрижки, расчесывания, и так далее.
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6j col-xs-12">
          <div class="service-content">
            <div class="img-box">
              <a href="#"><img src="assets/images/vacine.jpg" alt=""></a>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <a href="#"><img style="height:36px; width:36px;" src="assets/images/paw.jpg" alt=""></a>
              </div>
              <h3><a href="#" style="font-family: 'Oswald', sans-serif">Вакцинация и ветеринарная помощь</a></h3>
              <div class="text" style="font-family: 'Oswald', sans-serif">
                Здоровье животных имеет первостепенное значение, и первым шагом к этому является вакцинация. Это делает питомцев менее уязвимыми к распространенным смертельным заболеваниям домашних животных.
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6j col-xs-12">
          <div class="service-content">
            <div class="img-box">
              <a href="#"><img src="assets/images/woter.jpg" alt=""></a>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <a href="#"><img style="height:36px; width:36px;" src="assets/images/paw.jpg" alt=""></a>
              </div>
              <h3><a href="#" style="font-family: 'Oswald', sans-serif">Купание и чистка зубов</a></h3>
              <div class="text" style="font-family: 'Oswald', sans-serif">
                Купание и расчесывание обеспечивают безопасность собак и обеспечивают им комфорт. Наш детский сад для собак - это индивидуальный подход Создан для того, чтобы дать вашей собаке наилучшие впечатления вместе с некоторыми социализационными тренировками.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimony">
    <div class="heading">
      <b>Наши</b> Отзывы
    </div>
    <div class="wrapper">
      <div class="container">
        <div class="profile">
          <div class="imgBox">
            <img src="assets/images/xxh (2).jpeg" alt="">
          </div>
        </div>
        <p><span class="fa fa-quote-left left"></span>Невероятно душевное и приятное место, люди делают огромное доброе дело.
          Котики все ухоженные, многие очень ласковые и контактные. За всеми следят, проводят все необходимые процедуры своими силами. Можно приходить и как гость и помочь руками.
          Стараюсь всегда помогать, когда есть возможность, рассказываю всем друзьям.
          Сотрудники очень вежливые, заинтересованные, каждого котика знают в лицо и многое могут рассказать.
          Спасибо огромное за вашу работу!<span class="fa fa-quote-right right"></span></p>
        <div class="social">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>

      <div class="container">
        <div class="profile">
          <div class="imgBox">
            <img src="assets/images/xxh (1).jpeg" alt="">
          </div>
        </div>
        <p><span class="fa fa-quote-left left"></span>Чудесный приют для хвостиков. Давно хотели взять пушистого в семью, а это место лучше всех в городе. Очень чисто! Почти не пахнет котиками! Есть все необходимое гостям. Очень дружелюбный персонал, который расскажет про каждого котейку: характер, особенности. И посоветуют сделать лучший выбор - сердцем. Очень понравилось, что котики свободно гуляют и с каждым можно пообщаться! Очень ответственное отношение приюта к тем, кому они вверяют жизнь хвостатого.<span class="fa fa-quote-right right"></span></p>
        <div class="social">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>

      <div class="container">
        <div class="profile">
          <div class="imgBox">
            <img src="assets/images/xxh.jpeg" alt="">
          </div>
        </div>
        <p><span class="fa fa-quote-left left"></span>Замечательный приют, большой, чистый. Котики активные, чистые, ласковые) Также есть помещение для котят и помещение для котиков с лейкозом. Администраторы-душки расскажут про каждого котика и его особенности поведения, ответственно относятся к передаче котика в семью. Есть интересная программа попечительства, можно адресно помогать определенному котику, наблюдать за его жизнью, получать от него фото-приветы, отличный вариант для будущих хозяев
          <span class="fa fa-quote-right right"></span>
        </p>
        <div class="social">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
  </section>

  <div id="pFooter" class="container-fluid">
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
          <h5 style="font-family: 'Oswald', sans-serif">Социальные сети</h5>
          <p><a href="#" class="textnone">vk.com</a></p>
          <p><a href="#" class="textnone">web.telegram.org</a></p>
          <p><a href="#" class="textnone">instagram.softonic.ru</a></p>


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
</body>

</html>