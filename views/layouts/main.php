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
<?php $this->beginBody() ?>
<div class="parent">
<div id="wrap">
    <!--Фоновая картинка-->
    <div class="bg">

    </div>
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
<?php $this->endBody() ?>
</body>
</html>
<?php //Spaceless::end()?>
<?php $this->endPage() ?>
