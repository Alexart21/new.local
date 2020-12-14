<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;
use app\models\IndexForm;
/* ДИЧь */

//use y/ii\widgets\Spaceless;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php //Spaceless::begin(); // удаляет пробелы между HTML тегами?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
    <meta name="yandex-verification" content="630983552bc35f28"/>
</head>
<body>
<div id="parent">
<!-- loader -->
<div id="container_loading">
    <!--        <i class="fas fa-spinner fa-spin"></i>-->
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
         width="70px" height="70px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
         xml:space="preserve">
  <path fill="#DB3A0A"
        d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
      <animateTransform attributeType="xml"
                        attributeName="transform"
                        type="rotate"
                        from="0 25 25"
                        to="360 25 25"
                        dur="0.6s"
                        repeatCount="indefinite"/>
  </path>
  </svg>
</div>
<!-- end loader -->
<?php $this->beginBody() ?>
<div id="wrap">
    <!--Фоновая картинка-->
    <div class="bg"></div>
    <!--/-->
    <header>
        <!-- Menu -->
        <div class="menu-wrapper">
            <div class="m-logo-block">SOLO <strong>мебель</strong></div>
            <div class="logo-block">
                <img class="logo-img" src="/img/logo/logo223x100.png" alt="логотип компании Соло мебель">
                <span class="logo-text">мебель</span>
            </div>
            <a href="#menu" class="menu-link" style="font-size: 40px;color: #fff;padding-top: -20px !important;"> <span class="fa fa-align-justify"></span>
            </a>
            <nav id="menu" role="navigation">
                <div class="menu">
                    <ul  class="menu">
                        <li>
                            <a href="#" class="top-link">Team</a>
                        </li>
                        <li>
                            <a href="#" class="top-link">News</a>
                        </li>
                        <li  class="has-subnav">
                            <a href="#" class="top-link">Категории</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/galery/kitchen" class="top-link">Кухни</a>
                                </li>
                                <li>
                                    <a href="/galery/kitchen" class="top-link">Кухни</a>
                                </li>
                                <li>
                                    <a href="/galery/kitchen" class="top-link">Ралиусные шкафы купе</a>
                                </li>
                                <li>
                                    <a href="/galery/kitchen" class="top-link">Кухни</a>
                                </li>
                                <li>
                                    <a href="/galery/kitchen" class="top-link">Кухни</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="top-link">Our Work</a>
                        </li>
                        <li>
                            <a href="#" class="top-link">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end Menu -->
        <div class="header-content">
            <h1>Parallax Header</h1>
            <h3>simple and beautiful</h3>
        </div>
    </header>
<main>
    <?= $content ?>
</main>
<footer>
    <h2>FOOTER</h2>
</footer>
</div>
<!--Окно чата-->
<audio preload="auto">
    <source src="/audio/buben.mp3" type="audio/mpeg">
    <source src="/audio/buben.ogg" type="audio/ogg">
</audio>
<div id="msg-block" data-closed data-toggle="tooltip" data-trigger="manual" title="<?= hello() ?>,я <?= Yii::$app->params['manager'] ?>.Чем могу помочь ?">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
    <div id="msg-content">
        <div class="msg-closed button-anim">
            <i class="fab fa-viber viber"></i> <i class="fab fa-whatsapp wats"></i>
            <b  class="msg-closed-text">Начните чат</b>
        </div>
        <img class="msg-img msg-img rounded-circle img-thumbnail" src="/img/msg.jpg" alt="">
        <div class="msg-text">
            <div class="text-center"><?= hello() ?>,я <?= Yii::$app->params['manager'] ?>.</div>
            <div class="text-center text-info">выберите мессенджер и начните чат</div>
            <i style="display:block;text-align: right"><span class="fa fa-check"></span><?= date('H:i') ?>&nbsp;&nbsp;</i>
        </div>
        <hr>
        <a class="msg-btn viber-bg" href="viber://chat?number=<?= Yii::$app->params['msgNum'] ?>"
           target="_blank"><i class="fab fa-viber""></i> Viber</a>
        <a class="msg-btn watsap-bg" href="whatsapp://send?phone=<?= Yii::$app->params['msgNum'] ?>"
           target="_blank"><i class="fab fa-whatsapp"></i> Watsapp</a>
    </div>
</div>
<!--/-->
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php //Spaceless::end()?>
<?php $this->endPage() ?>
