<?php

use app\assets\AppAsset;
use yii\helpers\Html;
//use Yii;


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
                            href="tel:<?= Yii::$app->params['tel2_small'] ?>"><span class="tel"
                                                                                itemprop="telephone"><?= Yii::$app->params['tel2_large'] ?></span></a>&nbsp;&nbsp;&nbsp;<img
                            src="/img/icon/time.png" alt="" style="margin-top: 1px"><span class="tel"
                                                                                          style="font-weight: normal"> <span
                                itemprop="openingHours" datetime="Mo-Fr 10:00−21:00">Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</span>
        &nbsp;&nbsp;Вс 10<sup>00</sup>&mdash;20<sup>00</span>
                </div>
                <div class="mail-block">
                    <a rel="nofollow" class="pjax" href="/contact"  data-toggle="tooltip" title="написать письмо">
                       <i class="far fa-envelope"></i> <?= Yii::$app->params['email'] ?>
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
            <div>
                <br>
                <p>
                    Оплатить покупки можно при получении, либо выбрать другой способ оплаты
                </p>
                <div class="footer-payment__list">
                    <!--<div class="footer-payment__item">
                        <img src="/img/payment-icon/footer-payment-2.png" width="157" height="28" alt="Оплата Mastercard">
                    </div>
                    <div class="footer-payment__item">
                        <img src="/img/payment-icon/footer-payment-3.png" width="84" height="26" alt="Оплата Visa">
                    </div>-->
                    <div class="footer-payment__item">
                        <img src="/img/payment-icon/footer-payment-4.png" width="98" height="28" alt="Оплата МИР">
                    </div>
                    <!--<div class="footer-payment__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="109" height="20" viewBox="0 0 109 20" fill="none">
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.0457 14.847C31.0828 14.8495 30.1408 14.5674 29.339 14.0363C28.5372 13.5052 27.9116 12.749 27.5414 11.8635C27.1712 10.978 27.073 10.003 27.2593 9.06191C27.4456 8.12081 27.908 7.25591 28.5879 6.57675C29.2679 5.89759 30.1348 5.43466 31.079 5.24659C32.0231 5.05853 33.0022 5.15378 33.8918 5.52028C34.7817 5.88678 35.5425 6.50806 36.0777 7.30547C36.6127 8.10288 36.8985 9.04053 36.8985 9.99975C36.8995 11.2834 36.3887 12.5149 35.4787 13.4238C34.569 14.3326 33.3342 14.8445 32.0457 14.847ZM32.0457 2.47191e-05C30.3571 -0.00371516 28.6949 0.416972 27.2128 1.22315C25.7308 2.02933 24.4769 3.19494 23.5672 4.61209C22.6574 6.02925 22.1212 7.65216 22.0082 9.33059C21.8951 11.009 22.209 12.6887 22.9206 14.2142C23.6322 15.7398 24.7187 17.0617 26.0793 18.0579C27.44 19.054 29.0309 19.6921 30.7049 19.9131C32.3787 20.134 34.0815 19.9307 35.6559 19.322C37.2299 18.7132 38.6243 17.7187 39.7102 16.4305C39.0471 17.6587 38.0884 18.688 36.978 19.3348V19.8511H42.0583V9.94788C42.0464 7.30856 40.9865 4.78116 39.1106 2.91741C37.2347 1.05365 34.695 0.00488203 32.0457 2.47191e-05ZM80.2215 14.9445H73.6136V11.699H80.0965C80.9069 11.699 81.8527 12.4585 81.8527 13.3218C81.8527 13.948 81.3611 14.9445 80.2215 14.9445ZM73.6136 5.06328L79.1635 5.06084C79.7651 5.06084 80.7586 5.67972 80.7586 6.66953C80.7586 7.45941 80.1153 8.30906 78.9967 8.30906H73.6136V5.06328ZM84.7357 9.40159C85.9407 7.57653 86.0516 5.08259 84.9506 3.21681C84.4053 2.29395 83.6294 1.52763 82.6983 0.992631C81.767 0.457634 80.7125 0.172235 79.6375 0.164277L68.533 0.163117V19.8511L80.9584 19.843C84.856 19.843 87.0313 16.6384 87.0313 13.9494C87.0313 11.3621 85.5543 10.0647 84.7357 9.40159ZM63.5087 7.41809C65.176 11.9 65.2612 15.9663 65.2612 19.8514H60.1036C60.1036 16.7 59.9927 13.8305 59.3306 11.2364C58.4432 7.75906 56.7909 5.23116 55.2555 5.23103C53.72 5.23091 52.0665 7.75906 51.1791 11.2364C50.5169 13.8305 50.4073 16.6252 50.4073 19.8514H45.2498C45.2498 16.3157 45.3336 11.9 47.0013 7.41809C48.5553 3.24266 51.4593 0.000372622 55.2555 0.000372622C59.0516 0.000372622 61.9544 3.24266 63.5087 7.41809ZM14.8668 0.162883H20.0256V2.23677C20.0271 3.72569 19.6945 5.19616 19.0523 6.54059C18.4101 7.88506 17.4743 9.06953 16.3136 10.0074C17.4743 10.9453 18.4101 12.1298 19.0523 13.4743C19.6945 14.8188 20.0271 16.2892 20.0256 17.7781V19.852H14.8668V17.2587C14.8668 15.9763 14.3555 14.7465 13.4453 13.8398C12.5351 12.933 11.3006 12.4236 10.0134 12.4236C8.72619 12.4236 7.49169 12.933 6.5815 13.8398C5.6713 14.7465 5.15994 15.9763 5.15994 17.2587V19.8511H3.99516e-06V17.7772C-0.00128012 16.2882 0.331467 14.8177 0.97391 13.4732C1.61635 12.1288 2.55226 10.9443 3.71322 10.0065C2.55222 9.06872 1.61629 7.88428 0.973841 6.53984C0.331391 5.19537 -0.00132994 3.72487 3.99516e-06 2.23584V0.162534H5.15994V2.75489C5.15994 4.03725 5.6713 5.26709 6.5815 6.17384C7.49169 7.08063 8.72619 7.59003 10.0134 7.59003C11.3006 7.59003 12.5351 7.08063 13.4453 6.17384C14.3555 5.26709 14.8668 4.03725 14.8668 2.75489V0.162883ZM98.9871 14.8473C98.0243 14.8499 97.0822 14.5677 96.2806 14.0366C95.4787 13.5055 94.8532 12.7494 94.4829 11.8639C94.1129 10.9784 94.0145 10.0034 94.2008 9.06225C94.3871 8.12116 94.8495 7.25625 95.5295 6.57709C96.2093 5.89794 97.0763 5.435 98.0205 5.24694C98.9648 5.05887 99.9436 5.15413 100.833 5.52063C101.723 5.88716 102.484 6.50841 103.019 7.30581C103.554 8.10322 103.84 9.04087 103.84 10.0001C103.841 11.2838 103.33 12.5154 102.421 13.4243C101.511 14.3332 100.276 14.845 98.9871 14.8473ZM108.999 9.94822C108.985 7.60141 108.142 5.33431 106.619 3.54428C105.095 1.75423 102.988 0.555456 100.667 0.158068C98.345 -0.23932 95.9568 0.190024 93.9209 1.37085C91.8851 2.55168 90.3315 4.40866 89.5323 6.61628C88.7329 8.82394 88.7392 11.2414 89.5496 13.445C90.3601 15.6486 91.9231 17.4977 93.9649 18.6682C96.0067 19.8388 98.3968 20.2561 100.717 19.847C103.036 19.4379 105.138 18.2285 106.652 16.4308C105.989 17.659 105.03 18.6884 103.919 19.3352V19.8514H109V9.94788L108.999 9.94822Z" fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="109" height="20" fill="white"/>
                                </clipPath>
                            </defs>
                            <link xmlns=""/></svg>
                    </div>-->
                </div>
            </div>
            <p>
            <div>сайт разработан группой <a target="_blank" href="https://laravel.s-solo.ru"><strong>ALEXART-21</strong></a><img src="/img/logo/alex-logo.png" width="100" height="58" alt=""></div>
            <a href="/politic" class="small">Политика конфиденциальности</a><br>
            <span class="small">Использование сайта означает Ваше согласие на прием и передачу файлов Cookie.</span>
            <br>
            <span class="small">Информация размешенная на сайте не является публичной офертой.</span>
            <br>
            <span class="small">Этот сайт защищен Google reCAPTCHA в соответствии с <a href="https://policies.google.com/privacy">политикой конфиденциальности</a> и <a href="https://policies.google.com/terms">условиями применения</a>.</span>
            <br>
            <br>
            <br>
            <br>
        </footer>
    </div>
    <!--кнопка вверх-->
    <div id="scroller" class="fa fa-chevron-circle-up"></div>
    <!--/-->
    <!-- чат replane -->
    <a id="tg-btn-outher" href="https://t.me/+79023274546" target="_blank"><div class="tg-btn"></div></a>
    <script>
        window.addEventListener('load', () => {
            if (!('ontouchstart' in window || navigator.maxTouchPoints)){ // для десктопов
                console.log('desktop');
                setTimeout(() => {
                    window.replainSettings = {
                        id: '3c5fb190-8bb5-4a75-a72d-ae633d121544',
                        onClientOpenedChat: () => {
                            // клиент открыл чат или открылся по таймеру
                            // куку на 1 час
                            // в течении часа не будет всплывашек
                            document.cookie = 'chat_open=1;max-age=3600';
                        },
                    };
                    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
                        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
                    })('https://widget.replain.cc/dist/client.js');
                }, 3000);

                window.addEventListener('scroll', () => {
                    // откроем через .. после скрола
                    setTimeout(() => {
                        if(!readCookie('chat_open')){
                            window.ReplainAPI('open');
                            // установить стартовое сообщение (Перебивает то что было в настройках)
                            // window.ReplainAPI('setStartMessage', 'Привет!!! 👋');
                            // звук
                            beep();
                        }
                    }, 3000);
                })
            }else { // для мобил просто кнопка с ссылкой
                console.log('mobile');
                document.getElementById('tg-btn-outher').style.display = 'block';
            }
        });
    </script>
    <!-- конец чат replane -->
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
</script>
<script>
    $(document).ready(function(){
        $('[href="/contact"]').tooltip();
    });
</script>
</body>
</html>
<?php //Spaceless::end()?>
<?php $this->endPage() ?>
