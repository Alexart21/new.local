<?php
//debug($data);die;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;
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
<p class="h2 text-left" style="width: 50%">
<span class="header_shadow h2">Замерим</span>, продумаем дизайн и функционал под ваш бюджет, сделаем план электрики, изготовим, <span class="header_shadow h2">установим</span>, подключим
электрику и сантехнику, уберем мусор.
</p>

<div class="index-icon">
 <div class="d-flex flex-row justify-content-center">
            <div class="icon-block">
            <img src="/img/icon/piggy-bank.png" class="position-absolute" alt="">
                    <i class="h3 header_shadow">приемлемые цены</i>
                    <p>
                        Производим от Премиум до Эконом класса.
                        Без наценки магазина, напрямую с производства. Сэкономь до 20% от рыночных цен.
                    </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/scientist-woman.png" class="position-absolute" alt="">
                <i class="h3 header_shadow">наивысшее качество</i>
                <p>
                    Средний стаж каждого сотрудника компании «Solo мебель», более 10 лет в индустрии мебели. Все сотрудники получают оплату, только после 100% сдачи заказа.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/coins.png" class="position-absolute" alt="">
                <i class="h3 header_shadow">возможность рассрочки</i>
                <p>
                    Производим от Премиум до Эконом класса.
                    Без наценки магазина, напрямую с производства. Сэкономь до 20% от рыночных цен.
                </p>
            </div>
        </div>

<div class="d-flex flex-row justify-content-center">
            <div class="icon-block">
            <img src="/img/icon/credit-card.png" class="position-absolute" alt="">
                <i class="h3 header_shadow">оплата любым удобным способом</i>
                <p>
                    Наличный расчет, банковская карта,
                    оплата на расчетный счет компании
                    при работе с юр. лицами.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/oven.png" class="position-absolute" alt="">
                <i class="h3 header_shadow">скидки на технику</i>
                <p>
                    При покупке кухни, Вы получаете скидку на встраиваимую технику в подарок.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/certificate.png" class="position-absolute" alt="">
                <i class="h3 header_shadow">5 лет гарантии от производителя</i>
                <p>
                    Послегарантийное обслуживание прописывается в договоре
                </p>
            </div>
</div>
</div>
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
        <div class="h3 header_shadow">Онлайн-расчёт за 5 минут</div>
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
    Все кухни нашей фабрики могут быть изготовлены по индивидуальному проекту под Ваши размеры и в соответствии с Вашими стилевыми предпочтениями, цветового решения, функционального наполнения. Наши специалисты разработают для Вас новый дизайн-проект с учетом всех пожеланий. Более 100 моделей, выполненные в различных стилях, обеспечивают комфорт и уют и с успехом поражают воображение гостей в домах наших клиентов. Поэтому выбирайте в соответствии с собственными пожеланиями, вкусами и капризами, ну а высокое качество и приемлемые цены мы Вам гарантируем!
</p>
<!-- END !!! COPYPAST !!! -->
<a href="/call" class="pjax kitchen-icon-btn btn-2">ЗАКАЗАТЬ РАСЧЕТ СТОИМОСТИ</a>
<br>
<br>
<div id="design" class="anchors"></div>
<div class="d-flex flex-row justify-content-center">
<!--    <div style="width: 300px;height: 300px;background: lime"></div>-->
<!--    <div style="width: 300px;height: 300px;background: red"></div>-->
    <div class="solo-text">

            <p class="h2">
            ЧТО ДЕЛАЕТ КОМАНДА <span class="solo">SOLO</span> МЕБЕЛЬ, ДЛЯ ТОГО
            ЧТОБЫ ВЫ ПОЛУЧИЛИ НАИВЫСШЕЕ КАЧЕСТВО И ЧУВСТВО ВОСТОРГА ОТ ВАШЕЙ КУХНИ.
        <div class="solo-text-block">
            <span class="h3">
                    1  КАТАЛОГ КУХОННЫХ ГАРНИТУРОВ
            </span><br>
            Мы предполагаем, что принципиальный интерес к выбору кухонного гарнитура у Вас есть, поэтому предлагаем сделать первый легкий шаг, и ознакомиться с каталогом кухонных гарнитуров разной стилистики, предлагаемых компанией МебельМакс.

            Вы обязательно найдете кухню, от которой внутри Вас, кто-то сильно закричит «хочу!»
        </div>
            <div class="solo-text-block">
            <span class="h3">
                    2  ПОДРОБНАЯ КОНСУЛЬТАЦИЯ
                </span><br>
            Менеджер, который свяжется с Вами, проконсультирует Вас по всем первичным интересующим вопросам.
            После этой консультации  Вы будете знать о кухонных гарнитурах от А до Я.
            </div>
                <div class="solo-text-block">
            <span class="h3">3  ВЫЕЗД ДИЗАЙНЕРА</span><br>
            В удобное для Вас время к Вам приедет один из дизайнеров. Вы покажете ему свой интерьер, расскажете пожелания, особенности, заполните анкету. Дизайнер снимет размеры помещения.
            Сделает фотографии помещения. Проконсультирует Вас по возникшим вопросам. Посоветует разные планировки и дизайн сразу же на месте. После этой встречи, Вы точно будете знать что хотите, в каком дизайне и каких размеров. Осталось это воплотить в 3-D визуализацию, что бы окончательно убедиться. А это следующий шаг…
                </div>
    </div>

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

            <div class="h3" style="margin-bottom: -15px">Тел:</div>
            <?= $form->field($indexForm, 'tel')->textInput(['class' => 'index-field', 'required' => true])
                ->widget(MaskedInput::className(), [
                    'name' => 'zamer',
                    'mask' => '+7 (999) - 999 - 99 - 99',
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
            <?/*= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha3::className(),
                [
                    'siteKey' => '6Le5fgIaAAAAAP5WhDlLtheUqavfIo-QbRlk6IMM', // unnecessary is reCaptcha component was set up
                    'action' => 'index',
                ]);
            */?>
            <button type="submit"  class="btn btn-zamer">записаться на замер</button>
            <?php ActiveForm::end(); ?>
    </div>
</div>

<!---->
<div class="h2 header_shadow text-center">Этапы работы</div>
<div class="index-icon">
    <div class="d-flex flex-row justify-content-center">
        <div class="icon-block2">
            <div class="num">1</div>
            <img src="/img/new-icon/1design.png" alt="">
            <p>
                Пригласите дизайнера в удобное для вас время. Это совершенно бесплатно
            </p>
            <a href="#design" class="btn btn-zamer" style="width: 14em">пригласить дизайнера</a>
        </div>

        <div class="icon-block2">
            <div class="num">2</div>
            <img src="/img/new-icon/2zamer.png" alt="">
            <i class="h3 header_shadow">ЗАМЕР</i>
            <p>
                Дизайнер-проектировщик, измерит помещение, выслушает ваши пожелания, и подскажет, как совместить в кухне уют с функциональностью
            </p>
        </div>

        <div class="icon-block2">
            <div class="num">3</div>
            <img src="/img/new-icon/33d-modeling.png" alt="">
            <i class="h3 header_shadow">3D-ПРОЕКТ</i>
            <p>
                Узнайте, как будет выглядеть ваша кухня благодаря 3д-проекту гарнитура, сделанному по вашим размерам
            </p>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-center">
        <div class="icon-block2">
            <div class="num">4</div>
            <img src="/img/new-icon/4repair.png" alt="">
            <i class="h3 header_shadow">ИЗГОТОВЛЕНИЕ</i>
            <p>
                Ваша кухня изготавливается за срок до 50 дней и до момента доставки хранится на складе, что гарантирует её целостность.
            </p>
        </div>

        <div class="icon-block2">
            <div class="num">5</div>
            <img src="/img/new-icon/5delivery.png" alt="">
            <i class="h3 header_shadow">ДОСТАВКА</i>
            <p>
                Доставка в назначенный срок и подъём на этаж. Об этом вы предварительно договоритесь с нашим менеджером.
            </p>
        </div>

        <div class="icon-block2">
            <div class="num">6</div>
            <img src="/img/new-icon/6repair.png" alt="">
            <i class="h3 header_shadow">СБОРКА</i>
            <p>
                Монтаж кухни профессиональной бригадой сборщиков.
            </p>
        </div>
    </div>
</div>
<div class="calc d-flex flex-row justify-content-center flex-wrap">
    <div>
    <span class="h1 header_shadow">Экспресс расчет<br>
        в течении 15 минут
            </span>
    <p>
        Если вы уже заказывали эскиз кухонного гарнитура в другом месте,<br> отправьте нам чертежи с размерами, мы сделаем<br> экспресс расчет за 15мин с Более выгодным предложением.
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
            <a rel="nofollow" href="/contact" class="pjax"  data-toggle="tooltip" title="написать письмо" style="margin-top: -15px;color:#000;">
                <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;mail@s-solo.ru
            </a>
            <br>
            <b class="h4">Часы работы</b>
            <br>
            <span>Пн-Сб 10<sup>00</sup>&mdash;21<sup>00</sup></span>
            &nbsp;&nbsp;<span>Вс 10<sup>00</sup>&mdash;20<sup>00</sup></span>
        </div>

        <div class="" style="margin-bottom:-3px" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"height":450,"width":600,"zoom":17,"queryString":"Мега Молл, улица Калинина, Чебоксары, Россия","place_id":"ChIJtXBUroI3WkERV5PIDrgD1Ik","satellite":false,"centerCoord":[56.137947373666236,47.277931100000046],"cid":"0x89d403b80ec89357","cityUrl":"/russia/malyye-katrasi-269926","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"106955"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=106955';
                    s.async = true;
                    s.onload = function (e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();</script><a href="https://1map.com/map-embed?embed_id=106955">1map.com</a>
            </div>
    </div>
    </div>
<!---->
<br>
<br>
<br>
<div class="credit">
    <div class="credit-title">
        <div class="h3 header_shadow">ИНДИВИДУАЛЬНАЯ РАССРОЧКА ПОД 0%</div>
        <b>ОТ КОМПАНИИ <span class="solo">SOLO</span> МЕБЕЛЬ. БЕЗ УЧАСТИЯ БАНКА</b>
    </div>
    <div class="credit-form-block">
        <div class="h2 underline-red">ЗАПОЛНИТЕ КОРОТКУЮ АНКЕТУ.</div>
        И уже через месяц наслаждайтесь приготовление блюд на новенькой кухне.
        <div class="" >
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
            <div class="h3">Ваше имя:</div>
            <?= $form->field($indexForm, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>

            <div class="h3" style="margin-bottom: -15px">Тел:</div>
            <?= $form->field($indexForm, 'tel')->textInput(['id' =>'taxi-f', 'class' => 'index-field', 'required' => true])
                ->widget(MaskedInput::className(), [
                    'name' => 'taxi',
                    'mask' => '+7 (999) - 999 - 99 - 99',
                ]);
            ?>
            <br>
            <div class="h3">Рассчитываемый бюджет на кухню:</div>
            <input class="index-field" type="text"  name="sum" placeholder="например 100 000" required>
            <div class="h3">Желаемый ежемесячный платеж:</div>
            <input class="index-field" type="text" name="payments" placeholder="например 10 000">
            <?/*= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha3::className(),
                [
                    'siteKey' => '6Le5fgIaAAAAAP5WhDlLtheUqavfIo-QbRlk6IMM', // unnecessary is reCaptcha component was set up
                    'action' => 'index',
                ]);
            */?>
            <br>
            <button type="submit"  class="btn btn-zamer">оставить заявку</button>
            <?php ActiveForm::end(); ?>
        </div>
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
    <div class="otziv">
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
    </div>
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

        <div class="h3" style="margin-bottom: -15px">Тел:</div>
        <?= $form->field($indexForm, 'tel')->textInput(['id' =>'taxi-f', 'class' => 'index-field', 'required' => true, 'placeholder' => 'В любом формате'])
            ->widget(MaskedInput::className(), [
                'name' => 'taxi',
                'mask' => '+7 (999) - 999 - 99 - 99',
            ]);
        ?>
        <br>
        <?/*= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha3::className(),
                [
                    'siteKey' => '6Le5fgIaAAAAAP5WhDlLtheUqavfIo-QbRlk6IMM', // unnecessary is reCaptcha component was set up
                    'action' => 'index',
                ]);
            */?>
        <button type="submit"  class="btn btn-zamer">задать вопрос</button>
        <?php ActiveForm::end(); ?>
    </div>
    <img width="208" height="243" src="/img/call.jpg" alt="" data-scrollreveal="enter right and move 100px, wait 0.4s">
</div>
<!---->
<div class="bla-bla container">
<br>
<br>
<h2 class="text-center h1">Кухни в Чебоксарах от "<span class="solo">Solo</span> мебель" - почувствуйте удовольствие от готовки на собственной кухне!</h2>
    <p>
        Приготовление новых блюд, тихие семейные вечера на новой кухне - наслаждайтесь вместе с кухней от “МебельМакс”. В основе нашей работы заложены определенные принципы: мы никогда не навязываем клиенту дополнительных услуг, не предлагаем некачественные материалы, полностью погружаемся в желания и идеи заказчика. С нами вы сможете воплотить в жизнь самые необычные идеи! Клиенты любят нас за то, что мы открыты к ним:
    </p>
    <ul>
        <li>
            Держим цены от производителя. Купить кухонный гарнитур — затратное мероприятие даже для решений эконом-класса. Мы работаем без посредников, поэтому в «Solo мебель» можно купить кухню без наценок.
        </li>
        <li>
            Предлагаем простые условия рассрочки. Покупка мебели в рассрочку (особенно если это кухня в Чебоксарах) часто связана с бумажной волокитой. Оформляем рассрочку без участия банка, без справок о доходах и даже без процентов.
        </li>
        <li>
            Мы заботимся о клиентах, поэтому выкупаем старую кухню. Не продавайте и не выбрасывайте ваш гарнитур — при оформлении заказа на кухню мы возьмём старый гарнитур в зачёт нового.
        </li>
        <li>
            Не экономим на качестве. Используем долговечные акриловые фасады и австрийскую фурнитуру Blum — продукцию лидирующего на рынке производителя.
        </li>
        <li>
            Даём гарантию. Мы настолько уверены в качестве наших гарнитуров, что предоставляем 10-летнюю гарантию на все материалы и работу.
        </li>
        <li>
            Мы не оставляем после себя мусора! Вы можете начинать пить чай уже через минуту после того, как мы покинем вашу кухню и оставим там новенький гарнитур!
        </li>
    </ul>
    <p>
        Пользуйтесь надёжной кухонной мебелью с «Solo мебель» и наслаждайтесь вкусом любимых блюд!</p>
    <h2 class="text-center">Для тех, у кого остались вопросы по дизайну кухни</h2>
    <p>Продумаем дизайн интерьера кухни и поможем найти уютное и функциональное решение даже для непростых планировок:</p>
    <ul>
        <li>
            Хрущёвки и квартиры с маленькой кухней. Найдём компромисс между эстетикой и функциональностью и воплотим его в жизнь.
        </li>
        <li>
            Квартиры-студии. Правильно зонируем квартиру.
        </li>
        <li>
            Нестандартные планировки. Для маленьких пространств предлагаем создать дизайн угловой кухни — это отличное сочетание комфорта и функциональности.
        </li>
        <li>
            Выезд дизайнера на замеры всегда бесплатный, даже если вам не понравится ни один из вариантов гарнитуров.
        </li>
    </ul>
    <h2 class="text-center">Если остались вопросы по кухонным гарнитурам</h2>
    <p>
        В ассортименте — кухонные гарнитуры для маленькой кухни (угловые и обычные), решения для квартир-студий и домашних пространств любой планировки.
    </p>
    <p>
        Если вам не понравился ни один из представленных в каталоге гарнитуров - ничего страшного! Дизайнер приедет к вам, сделает замеры и подготовит варианты. Вы можете подъехать к нам в офис на бесплатном такси, и мы вместе выберем индивидуальный дизайн кухни!
    </p>
</div>
<!---->
<!---->
<br>
<br>
<div class="city d-flex flex-row justify-content-center flex-wrap">
    <div class="taxi-out item1">
        <img  class="taxi-inner" src="/img/taxi.png" width="652" height="354" alt="" data-scrollreveal="enter left and move 300px, wait 0.3s">
    </div>
    <div class="taxi-out item2">
        <div class="zamer-form-block"  data-scrollreveal="enter right and move 300px, wait 0.3s">
                <div class="h2 underline underline-red" style="margin-bottom: -10px">Оставьте заявку на бесплатное такси до <span class="solo">SOLO</span> мебель</div>
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

                <div class="h3" style="margin-bottom: -15px">Тел:</div>
                <?= $form->field($indexForm, 'tel')->textInput(['id' =>'taxi-f', 'class' => 'index-field', 'required' => true])
                    ->widget(MaskedInput::className(), [
                        'name' => 'taxi',
                        'mask' => '+7 (999) - 999 - 99 - 99',
                    ]);
                ?>
                <br>
                <?/*= $form->field($indexForm, 'reCaptcha')->widget(
                \himiklab\yii2\recaptcha\ReCaptcha3::className(),
                [
                    'siteKey' => '6Le5fgIaAAAAAP5WhDlLtheUqavfIo-QbRlk6IMM', // unnecessary is reCaptcha component was set up
                    'action' => 'index',
                ]);
            */?>
                <button type="submit"  class="btn btn-zamer">оставить заявку</button>
                <br>
                <br>
                <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<br>
<br>
<br>
<!---->