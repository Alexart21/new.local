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
                <a href="/"><div class="m-logo-block">SOLO <strong>мебель</strong></div></a>
                <a href="/">
                    <div class="logo-block">
                        <img class="logo-img" src="/img/logo/logo223x100.png" alt="логотип компании Соло мебель">
                        <span class="logo-text">мебель</span>
                    </div>
                </a>
                <!---->
                <div class="tel-block">
                    <!--<i class="fa fa-phone-alt"></i>--><a href="tel:<?= Yii::$app->params['tel1_small'] ?>"><span class="tel" itemprop="telephone"><?= Yii::$app->params['tel1_large'] ?></span></a>&nbsp;&nbsp;&nbsp;<span class="tel" style="font-weight: normal"><img
                                src="/img/icon/map.png" alt="" style="margin-top: 1px"> ТЦ "Мега молл" 4 этаж</span><br>
                    <!--<i class="fa fa-phone-alt" style="visibility: hidden">--></i><a href="<?= Yii::$app->params['tel2_small'] ?>"><span class="tel" itemprop="telephone"><?= Yii::$app->params['tel2_large'] ?></span></a>&nbsp;&nbsp;&nbsp;<img
                            src="/img/icon/time.png" alt="" style="margin-top: 1px"><span class="tel" style="font-weight: normal"> <span itemprop="openingHours" datetime="Mo-Fr 10:00−21:00">Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</span>
        &nbsp;&nbsp;Вс 10<sup>00</sup>&mdash;20<sup>00</span>
                </div>
                <div class="mail-block">
                    <a rel="nofollow" class="pjax" href="/contact"  title="написать письмо">
                        <i class="far fa-envelope"></i> mail@s-solo.ru
                    </a>
                </div>
                <!---->
                <a href="#menu" class="menu-link"> <span class="fa fa-align-justify" style="font-size: 60px;color: #003333"></span>
                    <!--            <a href="#menu" class="menu-link" style="color: #fff; !important;">MENU</a>-->
                    <nav id="menu" role="navigation">
                        <div class="menu">
                            <ul  class="menu">
                                <li>
                                    <a href="/" class="top-link">главная</a>
                                </li>
                                <li  class="has-subnav">
                                    <a href="#" class="top-link main-link">категории</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/galery/kitchen" class="top-link">кухни</a>
                                        </li>
                                        <li>
                                            <a href="/galery/lkupe" class="top-link">шкафы купе</a>
                                        </li>
                                        <li>
                                            <a href="/galery/kupe" class="top-link">радиусные шкафы купе</a>
                                        </li>
                                        <li>
                                            <a href="/galery/wall" class="top-link">стенки</a>
                                        </li>
                                        <li>
                                            <a href="/galery/office" class="top-link">офисная мебель</a>
                                        </li>
                                        <li>
                                            <a href="/galery/childrens" class="top-link">детские комнаты</a>
                                        </li>
                                        <li>
                                            <a href="/galery/hall" class="top-link">прихожие</a>
                                        </li>
                                        <li>
                                            <a href="/galery/bedroom" class="top-link">спальные гарнитуры</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/#contacts" class="top-link main-link" title="контакты">контакты</a>
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
            <br>
            <p>
                <b style="font-size: 120%;color: #e61b05">SOLO</b> мебель&nbsp;Copyright
                &copy;&nbsp;&nbsp;2007&mdash;<?= date('Y') ?>.
                <strong>Проектирование и производство кухонной мебели в Чебоксарах.</strong>
            </p>
            <p>
            <span class="tel">
                <b class="f-sh">Тел: </b> <b style="letter-spacing: 2px"><span style="font-size: 120%"> +7(8352) 37-57-00</span> &nbsp;&nbsp;</b>
            </span>
                <br>
                <span>
                    <b class="f-sh">E-mail:</b> <a rel="nofollow" href="/contact" class="pjax"><b style="letter-spacing: 2px"><span style="font-size: 120%"><?= Yii::$app->params['email'] ?></b></a>
                </span>
                <br>
                <b class="f-sh">Часы работы :</b>
                <span itemprop="openingHours" datetime="Mo-Fr 10:00−21:00">Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</span>
                &nbsp;&nbsp;<span>Вс 10<sup>00</sup>&mdash;20<sup>00</span>
            <p>
                <b class="text-center"><b class="f-sh">Адрес :</b> ул. Калинина 105а (Мега молл)</b>
            <div>
                <img src="/img/brands/blum.jpg" width="188" height="52" alt="фурнитура blum">
                <img src="/img/brands/hettich.jpg" width="188" height="52" alt="фурнитура hettich">
                <img src="/img/brands/mak.jpg" width="188" height="52" alt="фурнитура makmart">
            </div>
            <p>
            <div>сайт разработан группой <a href="https://alexart.houme21.ru"><strong>ALEXART-21</strong></a><img src="/img/logo/alex-logo.png" width="100" height="58" alt=""></div>
            <a href="/politic" class="small">Политика конфиденциальности</a><br>
            <span class="small">Использование сайта означает Ваше согласие на прием и передачу файлов Cookie.</span>
            <br>
            <span class="small">Информация размешенная на сайте не является публичной офертой.</span>
            <br>
            <span class="small">Этот сайт защищен Google reCAPTCHA в соответствии с <a href="https://policies.google.com/privacy">политикой конфиденциальности</a> и <a href="https://policies.google.com/terms">условиями применения</a>.</span>
            <br>
            <br>
            <br>
        </footer>
    </div>
</div>
<!--кнопка вверх-->
<div id="scroller" class="fa fa-chevron-circle-up"></div>
<!--/-->
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
