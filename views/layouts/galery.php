<?php

use app\assets\GaleryAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;

//use y/ii\widgets\Spaceless;
GaleryAsset::register($this);
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
<?php Pjax::begin([
    'clientOptions' => [
        'method' => 'get',
        'data-pjax-container' => '#ajax-img'
    ],
    'id' => 'ajax',
    'enablePushState' => false,
    'linkSelector' => '.pjax', //обрабатывать через pjax только отдельные ссылки
    'timeout' => 20000
]);
?>
<div id="ajax-img"></div>
<?php Pjax::end(); ?>
<div class="parent">
    <div id="wrap">
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
        </header>
        <main>
            <?= $content ?>
        </main>
        <footer>
            <h2>FOOTER</h2>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>
<script>
    window.onload = () => {
        window.scrollReveal = new scrollReveal();
        // const ldr = document.querySelector('#container_loading');
    };
    $(document).on('pjax:beforeSend', function () {
        document.body.style.cursor = 'progress';
        $('#container_loading').show();
        // ldr.style.display = 'block';
    });
    $(document).on('pjax:complete', function () {
        document.body.style.cursor = 'default';
        $('#container_loading').hide();
        // ldr.style.display = '';
    });
</script>
</body>
</html>
<?php //Spaceless::end()?>
<?php $this->endPage() ?>
