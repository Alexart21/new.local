<?php
//debug(Yii::$app->params['siteKeyV3']);die;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

//use yii\bootstrap4\Carousel;
//use yii\helpers\Html;

header('Last-Modified:' . gmdate("D, d M Y H:i:s \G\M\T", $data[0]['last_mod']));
$this->title = $data[0]['title'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $data[0]['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $data[0]['descrition']]);
?>

<?php Pjax::begin(
    [
        'clientOptions' => [
            'method' => 'GET',
            'data-pjax-container' => '#call_box',
        ],
        'enablePushState' => false, // не обновлять url
        'linkSelector' => '.pjax', //обрабатывать через pjax только отдельные ссылки
        'timeout' => '20000',
    ]);
?>
<output id="call_box"></output>
<?php Pjax::end(); ?>
<div class="advantages">
    <h2 class="advantages__title">Кухни под ключ здесь и сейчас</h2>
    <div class="advantages__items">
        <div class="advantages__wrapper">
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="agicn-project animate-svg" viewBox="0 0 64 64" id="3d33687ffc9fba719e0932932be7a369"><path fill="none" stroke="#00B4EB" stroke-width="2" d="M48 62H13c-1.7 0-3-1.3-3-3V5c0-1.7 1.3-3 3-3h38c1.7 0 3 1.3 3 3v54c0 1.7-1.3 3-3 3h-1"></path><path fill="none" stroke="#00B4EB" stroke-width="2" d="M45 6v3c0 1.7-1.3 3-3 3H22c-1.7 0-3-1.3-3-3V6m6.5 1h14M21 23h22m-22 6h22m-22 6h22m-22 6h12m9 4c2.8 0 5 2.2 5 5s-2.2 5-5 5-5-2.2-5-5 2.2-5 5-5"></path></svg>
                    </div>
                    <h3 class="advantage__name">Проектируем</h3>
                    <p class="advantage__descr">Делаем замеры и&nbsp;создаем индивидуальный дизайн-проект
                        с&nbsp;учетом особенностей вашей кухни</p>
                </div>
            </div>
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="aoicn-production animate-svg" viewBox="0 0 64 64" id="9c60803b26798fd29de9d8fada79e10d"><path fill="none" stroke="#E82626" stroke-width="2" d="M41.1 55.3L54 52l-2.5-4.3 9.5-9.3-4.3-2.5 3.6-12.8h-5l-3.3-13-4.3 2.5-9.3-9.5-2.6 4.3L23 3.8v5l-12.9 3.3 2.5 4.3-9.5 9.3 4.3 2.6-3.6 12.8h5L12.1 54l4.3-2.5 9.3 9.5 2.5-4.3L41 60.3"></path><path fill="none" stroke="#E82626" stroke-width="2" d="M32 17c8.3 0 15 6.7 15 15s-6.7 15-15 15-15-6.7-15-15 6.7-15 15-15"></path></svg>
                    </div>
                    <h3 class="advantage__name">Производим</h3>
                    <p class="advantage__descr">Автоматика и&nbsp;опытный персонал гарантируют точность раскроя
                        до&nbsp;0,1&nbsp;мм и&nbsp;четкое соблюдение технологии производства</p>
                </div>
            </div>
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="anicn-complete animate-svg" viewBox="0 0 64 64" id="9a33e9884abdd15319c3e1ffea25a389"><path fill="none" stroke="#EDB500" stroke-width="2" d="M22 26l10 10 22-22v-4H10v44h44V21"></path></svg>
                    </div>
                    <h3 class="advantage__name">Комплектуем</h3>
                    <p class="advantage__descr">Фурнитура, столешницы, встроенная техника и&nbsp;освещение:
                        подбираем детали согласно вашему запросу</p>
                </div>
            </div>
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="abicn-delivery animate-svg" viewBox="0 0 64 64" id="0f7b410c73635f94b1109aad0f689121"><path fill="none" stroke="#BD10E0" stroke-width="2" d="M5 44H1V12h36c1.7 0 3 1.3 3 3v29m0-26h11l12 12v14h-4"></path><path fill="none" stroke="#BD10E0" d="M51 43.5c.3 0 .5.2.5.5s-.2.5-.5.5-.5-.2-.5-.5.2-.5.5-.5"></path><path fill="none" stroke="#BD10E0" stroke-width="2" d="M51 38c3.3 0 6 2.7 6 6s-2.7 6-6 6-6-2.7-6-6 2.7-6 6-6M0 34h40"></path><path fill="none" stroke="#BD10E0" stroke-width="2" stroke-linecap="square" d="M1 54h62"></path><path fill="none" stroke="#BD10E0" stroke-width="2" d="M21 44h22m-30-6c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6"></path><path fill="none" stroke="#BD10E0" d="M13 43.5c-.3 0-.5.2-.5.5s.2.5.5.5.5-.2.5-.5-.2-.5-.5-.5"></path></svg>
                    </div>
                    <h3 class="advantage__name">Доставляем</h3>
                    <p class="advantage__descr">В&nbsp;удобное для вас время мы&nbsp;доставим новую кухню точно
                        по&nbsp;адресу и&nbsp;бережно поднимем на&nbsp;нужный этаж</p>
                </div>
            </div>
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ajicn-install animate-svg" viewBox="0 0 64 64" id="58b2a6fba0e6e5435fcb046eeef9ca07"><path fill="none" stroke="#C42F58" stroke-width="2" d="M3 46.7v.2C2.9 48.6 4.2 50 5.9 50h6.3c1.7 0 3.5-1.4 3.9-3.1l2.7-11.1c.3-1.1.7-2.8 1.9-2.8H33c1.6 0 2.9-1.3 2.9-2.8V16.8c0-1.6-1.3-2.8-2.8-2.8H11.3c-4.9 0-6.3 3.1-6.6 6.6 0 0-.6 14.2-1.4 23.4m38.6-15.5h-6m0-10h6m0-2h8c3.9 0 7 3.1 7 7s-3.1 7-7 7h-8v-14zm15 7H62"></path><path fill="none" stroke="#C42F58" stroke-width="2" d="M18.6 36.8h5.5c1.1 0 1.9-.9 1.9-1.9V33M12 18c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2"></path></svg>
                    </div>
                    <h3 class="advantage__name">Собираем</h3>
                    <p class="advantage__descr">Наши мастера работают уверенно, потому что знают особенности
                        каждой детали, включая фурнитуру и&nbsp;электрику</p>
                </div>
            </div>
            <div class="advantages__col">
                <div class="advantage advantages__item">
                    <div class="advantage__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="acicn-guarantee animate-svg" viewBox="0 0 64 64" id="0f7f7e1c02964c6157a0455e4116cb6e"><path fill="none" stroke="#7ED321" stroke-width="2" d="M12 13.8l.3-2.1c7.7.9 15-2.7 18.2-4.6l1.5-.9 1.5.9C36.7 9 44 12.7 51.7 11.7c1.8 15 8.8 33.4-15.3 44.4l-2.1.9c-.6.3-2 .8-2 .8l-.3.2-.2-.2s-1.4-.5-2-.8l-2.1-.9C6 46.1 9.5 30.2 11.7 16.2"></path><path fill="none" stroke="#7ED321" stroke-width="2" d="M19.4 30.7l6.6 6.7 18.5-13.6"></path></svg>
                    </div>
                    <h3 class="advantage__name">Гарантируем</h3>
                    <p class="advantage__descr">Мы&nbsp;даем гарантию 24 месяца на&nbsp;всю кухонную мебель, потому
                        что уверены в&nbsp;качестве своей продукции</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="instruction">
    <h2 class="instruction__title">До&nbsp;новой кухни — один клик</h2>
    <div class="instruction__wrapper">
        <div class="instruction__col">
            <div class="instruction-step">
                <div class="instruction-step__num instruction-step__num_blue">1</div>
                <div class="instruction-step__text">
                    <h3 class="instruction-step__title">Вызвать дизайнера</h3>
                    <p class="instruction-step__descr">выезд, замер, проект&nbsp;— <br>бесплатно</p>
                </div>
            </div>
        </div>
        <div class="instruction__col">
            <div class="instruction-step">
                <div class="instruction-step__num instruction-step__num_red">2</div>
                <div class="instruction-step__text">
                    <h3 class="instruction-step__title">Согласовать проект</h3>
                    <p class="instruction-step__descr">дизайнер предложит <br>оптимальную планировку</p>
                </div>
            </div>
        </div>
        <div class="instruction__col">
            <div class="instruction-step">
                <div class="instruction-step__num instruction-step__num_yellow">3</div>
                <div class="instruction-step__text">
                    <h3 class="instruction-step__title">Внести предоплату</h3>
                    <p class="instruction-step__descr">картой или наличными, <br>беспроцентной рассрочкой</p>
                </div>
            </div>
        </div>
        <div class="instruction__col">
            <div class="instruction-step">
                <div class="instruction-step__num instruction-step__num_vinous step__num">4</div>
                <div class="instruction-step__text">
                    <h3 class="instruction-step__title">Получить кухню</h3>
                    <p class="instruction-step__descr">через 30 дней кухня <br>будет готова к&nbsp;монтажу</p>
                </div>
            </div>
        </div>
        <div class="instruction__text">И&nbsp;всё это не&nbsp;выходя из&nbsp;дома</div>
    </div>
    <div class="index-hr">
    <a href="/call" class="pjax d-block btn-index" style="width: 300px">ВЫЗВАТЬ ДИЗАЙНЕРА</a>
    </div>
    <p class="call__note">Выезд, замер и проект — <span class="call__accent">бесплатно</span></p>
</div>
<p class="seo container">
    Мы разработали методы, которые позволяют снизить цены на продукцию, не ухудшая ее качество. Для этого мы улучшили работу в каждом из наших производственных цехов, создали собственную службу доставки и отдел контроля качества продукции. Мы обнаружили, что контроль за всеми процессами производства самостоятельно не только полезен для обеспечения высокого качества продукции, но и экономически выгоден.  Дополнительная информация: Оптимизация производственных процессов - это один из ключевых методов снижения затрат на производство продукции. Она включает в себя рационализацию технологических процессов, улучшение качества сырья и материалов, автоматизацию и механизацию производства, а также оптимизацию логистических процессов. Все это позволяет снизить затраты на производство и повысить эффективность бизнеса.
</p>
<div class="index-hr">
    <a href="/call" class="pjax d-block btn-index" style="width: 300px">УЗНАТЬ ПОДРОБНОСТИ</a>
</div>

<h2 class="h1 h-bg text-center">Производим и устанавливаем кухни под ключ</h2>
<div class="kitchen-icon d-flex flex-row justify-content-md-around flex-wrap">
    <div class="kitchen-icon-item">
        <img src="/img/new-icon/classic.png" width="150" height="150" alt="">
        <div class="h4">КЛАССИЧЕСКИЕ КУХНИ</div>
        <a href="/catalog" target="_blank" class="kitchen-icon-btn">перейти в каталог</a>
    </div>
    <div class="kitchen-icon-item">
        <img src="/img/new-icon/modern.png" width="150" height="150" alt="">
        <div class="h4">СОВРЕМЕННЫЕ КУХНИ</div>
        <a href="/catalog" target="_blank" class="kitchen-icon-btn">перейти в каталог</a>
    </div>
    <div class="kitchen-icon-item">
        <img src="/img/new-icon/loft.png" width="150" height="150" alt="">
        <div class="h4">КУХНИ ЛОФТ</div>
        <a href="/catalog" target="_blank" class="kitchen-icon-btn">перейти в каталог</a>
    </div>
</div>
<br>
<h2 class="h1 h-bg text-center">Соло мебель &mdash; кухни на заказ</h2>
<br>
<br>
<div class="d-flex flex-row justify-content-md-around flex-wrap">
    <div class="kitchen-icon-item2">
        <img src="/img/new-icon/1presentation.png" alt="" width="50" height="46">
        <p>
        <div class="h3 header_shadow">Онлайн-расчёт за 15 минут</div>
        бесплатный проект от дизайнера, посоветуем лучшее решение
    </div>
    <div class="kitchen-icon-item2">
        <img src="/img/new-icon/2calendar.png" alt="" width="50" height="50">
        <p>
        <div class="h3 header_shadow">Срок изготовления от 20 дней</div>
        две недели для производства гарнитура - это вполне реально!
    </div>
    <div class="kitchen-icon-item2">
        <img src="/img/new-icon/3certificate.png" alt="" width="50" height="50">
        <p>
        <div class="h3 header_shadow">Экологичные материалы</div>
        предоставляем сертификаты качества и соответствия на все материалы
    </div>
    <div class="kitchen-icon-item2">
        <img src="/img/new-icon/4like.png" alt="" width="50" height="44">
        <p>
        <div class="h3 header_shadow"><?= (int)date('Y') - 2007 ?> лет на рынке</div>
        работаем с 2007 года в области изготовления кухни на заказ
    </div>
</div>
<br>
<br>
<!-- !!! COPYPAST !!! -->
<p class="container">
    Все кухни нашей фабрики могут быть изготовлены по индивидуальному проекту под Ваши размеры и в соответствии с Вашими
    стилевыми предпочтениями, цветового решения, функционального наполнения. Наши специалисты разработают для Вас новый
    дизайн-проект с учетом всех пожеланий. Более 100 моделей, выполненные в различных стилях, обеспечивают комфорт и уют
    и с успехом поражают воображение гостей в домах наших клиентов. Поэтому выбирайте в соответствии с собственными
    пожеланиями, вкусами и капризами, ну а высокое качество и приемлемые цены мы Вам гарантируем!
</p>
<!-- END !!! COPYPAST !!! -->
<a href="/call" class="pjax kitchen-icon-btn btn-2">ЗАКАЗАТЬ РАСЧЕТ СТОИМОСТИ</a>
<br>
<br>
<!---->
<p class="h2">
    ЧТО ДЕЛАЕТ КОМАНДА <span class="solo">SOLO</span> МЕБЕЛЬ, ДЛЯ ТОГО
    ЧТОБЫ ВЫ ПОЛУЧИЛИ НАИВЫСШЕЕ КАЧЕСТВО И ЧУВСТВО ВОСТОРГА ОТ ВАШЕЙ КУХНИ.

<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="solo-text">
        <div class="solo-text-block">
            <span class="h3 underline-2">
                    1  КАТАЛОГ КУХОННЫХ ГАРНИТУРОВ
            </span><br>
            Мы предполагаем, что принципиальный интерес к выбору кухонного гарнитура у Вас есть, поэтому предлагаем
            сделать первый легкий шаг, и ознакомиться с каталогом кухонных гарнитуров разной стилистики, предлагаемых
            компанией МебельМакс.

            Вы обязательно найдете кухню, от которой внутри Вас, кто-то сильно закричит «хочу!»
        </div>
        <div class="solo-text-block">
            <span class="h3 underline-2">
                    2  ПОДРОБНАЯ КОНСУЛЬТАЦИЯ
                </span><br>
            Менеджер, который свяжется с Вами, проконсультирует Вас по всем первичным интересующим вопросам.
            После этой консультации Вы будете знать о кухонных гарнитурах от А до Я.
        </div>
        <div class="solo-text-block">
            <span class="h3 underline-2">3  ВЫЕЗД ДИЗАЙНЕРА</span><br>
            В удобное для Вас время к Вам приедет один из дизайнеров. Вы покажете ему свой интерьер, расскажете
            пожелания, особенности, заполните анкету. Дизайнер снимет размеры помещения.
            Сделает фотографии помещения. Проконсультирует Вас по возникшим вопросам. Посоветует разные планировки и
            дизайн сразу же на месте. После этой встречи, Вы точно будете знать что хотите, в каком дизайне и каких
            размеров. Осталось это воплотить в 3-D визуализацию, что бы окончательно убедиться. А это следующий шаг…
        </div>
    </div>

    <div id="design" class="anchors"></div>
    <div class="zamer-form-block" data-scrollreveal="enter right and move 300px, wait 0.3s">
        <div class="h2 header_shadow" style="margin-bottom: -10px">Запишитесь на замер и получите подарок!</div>
        <?php Pjax::begin([
            'clientOptions' => [
                'method' => 'POST',
                'data-pjax-container' => '#form1-box',
            ],
            'id' => 'call',
            'enablePushState' => false,
            'formSelector' => '#zvonok-form',
            'timeout' => 20000
        ]);
        ?>
        <output id="form1-box"></output>
        <?php Pjax::end(); ?>

        <?php $form = ActiveForm::begin([
            'options' => ['id' => 'zvonok-form', 'data-pjax' => true],
        ]);
        ?>
        <br>
        <div class="h3">Ваше имя:</div>
        <?= $form->field($indexForm, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>

        <div class="h3">Тел:</div>
        <?= $form->field($indexForm, 'tel')->textInput()
            ->widget(MaskedInput::className(), [
                'name' => 'zamer',
                'mask' => '+7 (999) - 999 - 99 - 99',
                'options' => [
                    'id' => 'mask1',
                    'class' => 'index-field',
                ],

            ]);
        ?>
        <div class="h3">Адрес:</div>
        <input class="index-field" type="text" name="adress" tabindex="3" placeholder="улица дом.кв." required>
        <br>
        <br>
        <div class="h3">Удобное Вам время:</div>
        <input class="index-field" type="text" name="dop" tabindex="4" placeholder="напр. после 17-00">
        <br>
        <br>
        <?= $form->field($indexForm, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha2::class,
            [
                'siteKey' => Yii::$app->params['siteKeyV2'], // unnecessary is reCaptcha component was set up
            ]
        ) ?>

        <button type="submit" class="btn btn-zamer">записаться на замер</button>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<br>
<br>
<br>
<div class="calc d-flex flex-row justify-content-center flex-wrap">
    <div>
    <span class="h1 header_shadow">Экспресс расчет<br>
        в течении 15 минут
            </span>
        <p>
            Если вы уже заказывали эскиз кухонного гарнитура в другом месте,<br> отправьте нам чертежи с размерами, мы
            сделаем<br> экспресс расчет за 15мин с Более выгодным предложением.
        </p>
        <a href="/call" class="pjax kitchen-icon-btn header_shadow">заказать экспресс расчет</a>
    </div>

    <img src="/img/kitchen.jpg" alt="" width="557" height="494">
</div>
<!---->
<div id="contacts" class="h1 text-center anchors">Как нас найти ?</div>
<div class="text-center h3">г.Чебоксары ТЦ "<b>Мега молл</b>" 4 этаж (ул. Калинина 105а)</div>

<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="">
        <img class="" src="/img/mega.jpg" alt="">
        <div class="">
            <div class="h3">Тел: +7(8352) 37-57-00</div>
            <a rel="nofollow" href="/contact" class="pjax" data-toggle="tooltip" title="написать письмо"
               style="margin-top: -15px;color:#000;">
                <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;mail@s-solo.ru
            </a>
            <br>
            <b class="h4">Часы работы</b>
            <br>
            <span>Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</sup></span>
            &nbsp;&nbsp;<span>Вс 10<sup>00</sup>&mdash;20<sup>00</sup></span>
        </div>
        <div id="map"></div>
            <script async src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=2937914e-0b30-4ff3-b518-b51947516d27" type="text/javascript"></script>
            <script>
                window.addEventListener('load', () => {
                    function init() {
                        let myMap = new ymaps.Map("map", {
                                // Координаты центра карты.
                                center: [56.137656, 47.277821],
                                zoom: 17
                            }, {
                                // searchControlProvider: 'yandex#search'
                            }),

                            // Создаем геообъект с типом геометрии "Точка".
                            myGeoObject = new ymaps.GeoObject({
                                // Описание геометрии.
                                geometry: {
                                    type: "Point",
                                    coordinates: [56.137656, 47.277821],
                                },
                                // Свойства.
                                properties: {
                                    iconContent: 'Соло мебель в ТЦ МЕГА МОЛЛ',
                                },
                            }, {
                                preset: "islands#redStretchyIcon",
                            });
                        myMap.geoObjects
                            .add(myGeoObject)
                    }
                    ymaps.ready(init);
                })
            </script>
    </div>
</div>
<!---->
<br>
<br>
<br>
<div class="credit-title">
    <div class="h3 header_shadow">ИНДИВИДУАЛЬНАЯ РАССРОЧКА ПОД 0%</div>
    <b>ОТ КОМПАНИИ <span class="solo">SOLO</span> МЕБЕЛЬ. БЕЗ УЧАСТИЯ БАНКА</b>
</div>
<div class="credit-form-block">
    <div class="h2 underline-red">ЗАПОЛНИТЕ КОРОТКУЮ АНКЕТУ</div>
    И уже через месяц наслаждайтесь приготовление блюд на новенькой кухне.
    <div class="">
        <?php Pjax::begin([
            'clientOptions' => [
                'method' => 'POST',
                'data-pjax-container' => '#credit-out',
            ],
            'id' => 'call',
            'enablePushState' => false,
            'formSelector' => '#credit-form',
            'timeout' => 20000,
        ]);
        ?>
        <output id="credit-out"></output>
        <?php Pjax::end(); ?>

        <?php $form = ActiveForm::begin([
            'options' => ['id' => 'credit-form', 'data-pjax' => true],
        ]);
        ?>
        <div class="h3 text-left">Ваше имя:</div>
        <?= $form->field($indexForm, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>

        <div class="h3 text-left" style="margin-bottom: -15px">Тел:</div>
        <?= $form->field($indexForm, 'tel')->textInput()
            ->widget(MaskedInput::className(), [
                'name' => 'taxi',
                'mask' => '+7 (999) - 999 - 99 - 99',
                'options' => [
                    'id' => 'mask2',
                    'class' => 'index-field',
                ],
            ]);
        ?>
        <br>
        <div class="h3 text-left">Рассчитываемый бюджет на кухню:</div>
        <input class="index-field" type="text" name="sum" placeholder="например 100 000" required>
        <br>
        <div class="h3 text-left">Желаемый ежемесячный платеж:</div>
        <input class="index-field" type="text" name="payments" placeholder="например 10 000">
        <?= $form->field($indexForm, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha2::class,
            [
                'siteKey' => Yii::$app->params['siteKeyV2'], // unnecessary is reCaptcha component was set up
            ]
        ) ?>
        <br>
        <button type="submit" class="btn btn-zamer">оставить заявку</button>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<!---->
<br>
<br>
<div class="h1 text-center header_shadow">Анкеты-отзывы</div>
<div class="h2 text-center">КОТОРЫЕ ЗАПОЛНЯЕТ КЛИЕНТ ПОСЛЕ УСТАНОВКИ КУХНИ</div>
<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="otziv">
        <img src="/img/doc.png" alt="">
    </div>
    <!--<div class="otziv">
        <b class="h3">Федоров А.С.</b><br>
        <span style="opacity: .6">заказывали в компании "Solo мебель"</span><br>
        <b class="h4">кухонный гарнитур</b>
        <br>
        <br>
        <br>
        <br>
        <b class="h3">Отзыв</b><br>
        Выражаю благодарность за качественную сборку и<br>
        подробную консультацию по выбору кухонного гарнитура.<br>
        <span style="opacity: .6">07.11.2020</span>
        <br>
        <br>
        <br>
        <br>
        <a href="/contact" class="pjax btn btn-zamer">оставить отзыв</a>
    </div>-->
    <!-- Carousel -->
    <div id="carousel-otz" class="carousel slide">
        <div class="carousel-inner">
            <ol class="carousel-indicators">
                <li data-target="#carousel-otz" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-otz" data-slide-to="1"></li>
                <li data-target="#carousel-otz" data-slide-to="2"></li>
            </ol>
            <div class="carousel-item active">
                <img src="/img/user/user1.jpg" class="icon-shadow img-thumbnail rounded-circle" alt="">
                <div class="carousel-caption">
                    <h3 class="header_shadow">Светлана Сергеева</h3>
                    <p>Довольна уровенем сервиса. Кухню доставили в оговоренные сроки.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/user/user2.jpg" class="icon-shadow img-thumbnail rounded-circle" alt="">
                <div class="carousel-caption">
                    <h3 class="header_shadow">Алексей Минаев</h3>
                    <p>Приемлемые цены.Отдельно заслуживает благодарности что убрали мусор.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/user/user3.jpg" class="icon-shadow img-thumbnail rounded-circle" alt="">
                <div class="carousel-caption">
                    <h3 class="header_shadow">Ольга</h3>
                    <p>Довольна качеством работ.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-otz" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-otz" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <a href="/contact" class="pjax btn btn-zamer">оставить отзыв</a>
    </div>
    <!---->
</div>
<!---->
<br>
<br>
<!---->
<h2 class="h1 heder_shadow text-center">Мы также производим другую корпусную мебель на заказ</h2>
<br>
<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="other-meb-block view view-tenth">
        <a href="/galery/lkupe">
            <img src="/img/hall/kupe.jpg" alt="">
            <div class="mask">
                <h4 class="h-bg2">Шкафы купе</h4>
                <p>Шкафы купе и гардеробные.А так же радиусные шкафы купе</p>
            </div>
        </a>
    </div>
    <div class="other-meb-block view view-tenth">
        <a href="/galery/childrens">
            <img src="/img/childrens/childrens.jpg" alt="">
            <div class="mask">
                <h4 class="h-bg2">Детская мебель</h4>
                <p>Детские комнаты и все виды мебели для детей</p>
            </div>
        </a>
    </div>
</div>

<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="other-meb-block view view-tenth">
        <a href="/galery/wall">
            <img src="/img/wall/wall.jpg" alt="">
            <div class="mask">
                <h4 class="h-bg2">Мебель для гостинной</h4>
                <p>Стенки, журнальные столы и другая мебель для дома</p>
            </div>
        </a>
    </div>
    <div class="other-meb-block view view-tenth">
        <a href="/galery/office">
            <img src="/img/hall/other.jpg" alt="">
            <div class="mask">
                <h4 class="h-bg2">Офисная мебель</h4>
                <p>Все виды офисной и другой мебели для бизнеса.</p>
            </div>
        </a>
    </div>
</div>
<br>
<br>
<a href="/catalog" target="_blank" class="btn btn-zamer center-block">перейти в каталог</a>
<!---->
<br>
<div class="h1 text-center">Остались вопросы?</div>
<div class="h3 text-center">Мы с радостью на них ответим</div>
<div class="d-flex flex-row justify-content-center flex-wrap">
    <div class="vopros" data-scrollreveal="enter left and move 100px, wait 0.4s">
        <?php Pjax::begin([
            'clientOptions' => [
                'method' => 'POST',
                'data-pjax-container' => '#vopros-out',
            ],
            'id' => 'call',
            'enablePushState' => false,
            'formSelector' => '#vopros-form',
            'timeout' => 20000,
        ]);
        ?>
        <output id="vopros-out"></output>
        <?php Pjax::end(); ?>

        <?php $form = ActiveForm::begin([
            'options' => ['id' => 'vopros-form', 'data-pjax' => true],
        ]);
        ?>
        <div class="h3">Ваше имя:</div>
        <?= $form->field($indexForm, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>

        <div class="h3">Тел:</div>
        <?= $form->field($indexForm, 'tel')->textInput()
            ->widget(MaskedInput::className(), [
                'name' => 'taxi',
                'mask' => '+7 (999) - 999 - 99 - 99',
                'options' => [
                    'id' => 'mask3',
                    'class' => 'index-field',
                ],
            ]);
        ?>
        <br>

        <?= $form->field($indexForm, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha2::class,
            [
                'siteKey' => Yii::$app->params['siteKeyV2'], // unnecessary is reCaptcha component was set up
            ]
        ) ?>
        <button type="submit" class="btn btn-zamer">задать вопрос</button>
        <?php ActiveForm::end(); ?>
    </div>
    <img width="208" height="243" src="/img/call.jpg" alt="" data-scrollreveal="enter right and move 100px, wait 0.4s">
</div>
<!---->
<div class="bla-bla container">
    <br>
    <br>
    <h2 class="text-center h1">Кухни в Чебоксарах от "<span class="solo">Solo</span> мебель" - почувствуйте удовольствие
        от готовки на собственной кухне!</h2>
    <!-- Carousel -->
    <div id="carousel-meb" class="carousel slide" data-ride="carousel" data-interval="3500">
        <ol class="carousel-indicators">
            <li data-target="#carousel-meb" data-slide-to="0" class="active">минимализм</li>
            <li data-target="#carousel-meb" data-slide-to="1">современный стиль</li>
            <li data-target="#carousel-meb" data-slide-to="2">кантри</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/carousel_img/img1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="/img/carousel_img/img2.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="/img/carousel_img/img3.jpg" alt="">
            </div>
        </div>
    </div>
    <!---->
    <br>
    <br>
    <br>
    <p>
        Приготовление новых блюд, тихие семейные вечера на новой кухне - наслаждайтесь вместе с кухней от “МебельМакс”.
        В основе нашей работы заложены определенные принципы: мы никогда не навязываем клиенту дополнительных услуг, не
        предлагаем некачественные материалы, полностью погружаемся в желания и идеи заказчика. С нами вы сможете
        воплотить в жизнь самые необычные идеи! Клиенты любят нас за то, что мы открыты к ним:
    </p>
    <ul>
        <li>
            Держим цены от производителя. Купить кухонный гарнитур — затратное мероприятие даже для решений
            эконом-класса. Мы работаем без посредников, поэтому в «Solo мебель» можно купить кухню без наценок.
        </li>
        <li>
            Предлагаем простые условия рассрочки. Покупка мебели в рассрочку (особенно если это кухня в Чебоксарах)
            часто связана с бумажной волокитой. Оформляем рассрочку без участия банка, без справок о доходах и даже без
            процентов.
        </li>
        <li>
            Мы заботимся о клиентах, поэтому выкупаем старую кухню. Не продавайте и не выбрасывайте ваш гарнитур — при
            оформлении заказа на кухню мы возьмём старый гарнитур в зачёт нового.
        </li>
        <li>
            Не экономим на качестве. Используем долговечные акриловые фасады и австрийскую фурнитуру Blum — продукцию
            лидирующего на рынке производителя.
        </li>
        <li>
            Даём гарантию. Мы настолько уверены в качестве наших гарнитуров, что предоставляем 10-летнюю гарантию на все
            материалы и работу.
        </li>
        <li>
            Мы не оставляем после себя мусора! Вы можете начинать пить чай уже через минуту после того, как мы покинем
            вашу кухню и оставим там новенький гарнитур!
        </li>
    </ul>
    <p>
        Пользуйтесь надёжной кухонной мебелью с «Solo мебель» и наслаждайтесь вкусом любимых блюд!</p>
    <h2 class="text-center">Для тех, у кого остались вопросы по дизайну кухни</h2>
    <p>Продумаем дизайн интерьера кухни и поможем найти уютное и функциональное решение даже для непростых
        планировок:</p>
    <ul>
        <li>
            Хрущёвки и квартиры с маленькой кухней. Найдём компромисс между эстетикой и функциональностью и воплотим его
            в жизнь.
        </li>
        <li>
            Квартиры-студии. Правильно зонируем квартиру.
        </li>
        <li>
            Нестандартные планировки. Для маленьких пространств предлагаем создать дизайн угловой кухни — это отличное
            сочетание комфорта и функциональности.
        </li>
        <li>
            Выезд дизайнера на замеры всегда бесплатный, даже если вам не понравится ни один из вариантов гарнитуров.
        </li>
    </ul>
    <h2 class="text-center">Если остались вопросы по кухонным гарнитурам</h2>
    <p>
        В ассортименте — кухонные гарнитуры для маленькой кухни (угловые и обычные), решения для квартир-студий и
        домашних пространств любой планировки.
    </p>
    <p>
        Если вам не понравился ни один из представленных в каталоге гарнитуров - ничего страшного! Дизайнер приедет к
        вам, сделает замеры и подготовит варианты. Вы можете подъехать к нам в офис на бесплатном такси, и мы вместе
        выберем индивидуальный дизайн кухни!
    </p>
</div>
<!---->
<!---->
<br>
<br>
<div class="city d-flex flex-row justify-content-center flex-wrap">
    <div class="taxi-out item1">
        <img class="taxi-inner" src="/img/taxi.png" width="652" height="354" alt=""
             data-scrollreveal="enter left and move 300px, wait 0.3s">
    </div>
    <div class="taxi-out item2">
        <div class="zamer-form-block" data-scrollreveal="enter right and move 300px, wait 0.3s">
            <div class="h2 underline underline-red" style="margin-bottom: -10px">Оставьте заявку на бесплатное такси до
                <span class="solo">SOLO</span> мебель
            </div>
            <?php Pjax::begin([
                'clientOptions' => [
                    'method' => 'POST',
                    'data-pjax-container' => '#taxi-out',
                ],
                'id' => 'call',
                'enablePushState' => false,
                'formSelector' => '#taxi',
                'timeout' => 20000
            ]);
            ?>
            <output id="taxi-out"></output>
            <?php Pjax::end(); ?>

            <?php $form = ActiveForm::begin([
                'options' => ['id' => 'taxi', 'data-pjax' => true],
            ]);
            ?>
            <div class="h3">Ваше имя:</div>
            <?= $form->field($indexForm, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>

            <div class="h3">Тел:</div>
            <?= $form->field($indexForm, 'tel')->textInput()
                ->widget(MaskedInput::className(), [
                    'name' => 'taxi',
                    'mask' => '+7 (999) - 999 - 99 - 99',
                    'options' => [
                        'id' => 'mask4',
                        'class' => 'index-field',
                    ],
                ]);
            ?>
            <br>
            <?= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha2::class,
                [
                    'siteKey' => Yii::$app->params['siteKeyV2'], // unnecessary is reCaptcha component was set up
                ]
            ) ?>
            <?php /*= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha3::class,
                [
                    'siteKey' => Yii::$app->params['siteKeyV3'],
                    'action' => 'index',
                ]
            ) */ ?>

            <button type="submit" class="btn btn-zamer">оставить заявку</button>
            <br>
            <br>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<br>
<br>
<br>