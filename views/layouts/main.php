<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use Yii;


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
            <div class="header-content">
                <h1 class="top-h1">Кухни в Чебоксарах</h1>
                <div class="h3">По вашим размерам с гарантией</div>
            </div>
            <!-- Menu -->
            <div class="menu-wrapper">
                <a href="/">
                    <div class="m-logo-block">SOLO <strong>мебель</strong></div>
                </a>
                <a href="/">
                    <div class="logo-block">
                        <img class="logo-img" src="/img/logo/logo223x100.png" alt="логотип компании Соло мебель">
                        <span class="logo-text">мебель</span>
                    </div>
                </a>
                <!---->
                <div class="tel-block">
                    <!--<i class="fa fa-phone-alt"></i>--><a href="tel:<?= Yii::$app->params['tel1_small'] ?>"><span
                                class="tel" itemprop="telephone"><?= Yii::$app->params['tel1_large'] ?></span></a>&nbsp;&nbsp;&nbsp;<span
                            class="tel" style="font-weight: normal"><img
                                src="/img/icon/map.png" alt="" style="margin-top: 1px"> ТЦ "Мега молл" 4 этаж</span><br>
                    <!--<i class="fa fa-phone-alt" style="visibility: hidden">--></i><a
                            href="<?= Yii::$app->params['tel2_small'] ?>"><span class="tel"
                                                                                itemprop="telephone"><?= Yii::$app->params['tel2_large'] ?></span></a>&nbsp;&nbsp;&nbsp;<img
                            src="/img/icon/time.png" alt="" style="margin-top: 1px"><span class="tel"
                                                                                          style="font-weight: normal"> <span
                                itemprop="openingHours" datetime="Mo-Fr 10:00−21:00">Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</span>
        &nbsp;&nbsp;Вс 10<sup>00</sup>&mdash;20<sup>00</span>
                </div>
                <div class="mail-block">
                    <a rel="nofollow" href="/#contacts" title="написать письмо">
                        <a rel="nofollow" href="/contact" class="pjax"><i class="far fa-envelope"></i> mail@s-solo.ru</a>
                    </a>
                </div>
                <!---->
                <a href="#menu" class="menu-link"> <span class="fa fa-align-justify"
                                                         style="font-size: 60px;color: #003333"></span>
                    <!--            <a href="#menu" class="menu-link" style="color: #fff; !important;">MENU</a>-->
                    <nav id="menu" role="navigation">
                        <div class="menu">
                            <ul class="menu">
                                <li class="has-subnav">
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
                <b class="header_shadow">Тел.</b> <b style="letter-spacing: 2px">+7(8352) 37-57-00 &nbsp;&nbsp;</b>
            </span>
                <b class="header_shadow">Часы работы :</b>
                <span itemprop="openingHours" datetime="Mo-Fr 10:00−21:00">Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</span>
                &nbsp;&nbsp;<span>Вс 10<sup>00</sup>&mdash;20<sup>00</span>
            <p>
                <b class="text-center"><b class="header_shadow">Адрес :</b> ул. Калинина 105а (Мега молл)</b>
            <div>
                <img src="/img/brands/blum.jpg" width="188" height="52" alt="фурнитура blum">
                <img src="/img/brands/hettich.jpg" width="188" height="52" alt="фурнитура hettich">
                <img src="/img/brands/mak.jpg" width="188" height="52" alt="фурнитура makmart">
            </div>
            <p>
            <div>сайт разработан группой <a href="http://l917678y.beget.tech"><strong>ALEXART-21</strong></a><img src="/img/logo/alex-logo.png" width="100" height="58" alt=""></div>
            <a href="/politic" class="small">Политика обработки персональных данных</a><br>
            <span class="small">Использование сайта означает Ваше согласие на прием и передачу файлов Cookie.</span>
            <br>
            <span class="small">Этот сайт защищен Google reCAPTCHA в соответствии с <a href="https://policies.google.com/privacy">политикой конфиденциальности</a> и <a href="https://policies.google.com/terms">условиями применения</a>.</span>
            <br>
            <br>
        </footer>
    </div>
    <!--Окно чата-->
    <audio preload="auto">
        <source src="/audio/buben.mp3" type="audio/mpeg">
        <source src="/audio/buben.ogg" type="audio/ogg">
    </audio>
    <div id="msg-block" data-closed data-toggle="tooltip" data-trigger="manual"
         title="<?= hello() ?>,я <?= Yii::$app->params['manager'] ?>.Чем могу помочь ?">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <div id="msg-content">
            <div class="msg-closed button-anim">
                <i class="fab fa-viber viber"></i> <i class="fab fa-whatsapp wats"></i>
                <b class="msg-closed-text">Начните чат</b>
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
    <!--кнопка вверх-->
    <div id="scroller" class="fa fa-chevron-circle-up"></div>
    <!--/-->
</div>
<?php $this->endBody() ?>
<script>
    $(document).on('pjax:beforeSend', function () {
        document.body.style.cursor = 'progress';
        $('#container_loading').show();
    });
    $(document).on('pjax:complete', function () {
        document.body.style.cursor = 'default';
        $('#container_loading').hide();
        // let method = $.pjax.options.type;
        // console.log(method);
    });
    ///
    window.scrollReveal = new scrollReveal();
    window.onload = () => {

        // const ldr = document.querySelector('#container_loading');

        //////////////
        let msgBlock = document.getElementById('msg-block'),
            msgContent = document.getElementById('msg-content'),
            msgImg = document.querySelector('.msg-img'),
            msgClosed = document.querySelector('.msg-closed');
        // несколько задержек
        setTimeout(showMsg, 3000); //  показываем блок с чатом
        setTimeout(showTooltip, 6000); // показываем всплывающую подсказку/приглашение
        setTimeout(rmTooltip, 14000); // скрываем подсказку
        setTimeout(rmMsgAnim, 30000); // выключаем анимацию

        msgContent.addEventListener('click', () => { // разворачиваем окно чата
            if (msgBlock.hasAttribute('data-closed')) { // свернуто
                // msgBlock.style.height = '370px';
                msgBlock.classList.add('msg-opened');
                msgBlock.style.background = 'url(/img/wats-bg.gif)';
                msgBlock.style.boxShadow = '0 0 30px #999';
                msgImg.style.right = '134px';
                msgImg.style.opacity = '0.7';
                msgClosed.style.display = 'none';
                msgBlock.removeAttribute('data-closed');
                showMsg();
            }
        });
//
        const msgClose = document.querySelector('#msg-block button');
        msgClose.addEventListener('click', () => { // сворачиваем окно чата
            if (!msgBlock.hasAttribute('data-closed')) { // окно не свернуто
                msgImg.style.right = '';
                msgImg.style.opacity = '';
                // msgBlock.style.height = '';
                msgBlock.classList.remove('msg-opened');
                msgBlock.style.background = '';
                msgBlock.style.boxShadow = '';
                msgClosed.style.display = '';
                msgBlock.setAttribute('data-closed', '');
            }
        });
//

        msgBlock.addEventListener('mouseover', () => { // по наведению мыши тож прибиваем
            rmTooltip();
        });
    };
</script>
<script>
    /*window.replainSettings = { id: 'a5f39b2c-c464-4efa-be14-9656e0c2dc4a' };
    (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');*/
</script>
</body>
</html>
<?php //Spaceless::end()?>
<?php $this->endPage() ?>
