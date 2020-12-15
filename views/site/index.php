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

<p class="h2 text-left header_shadow" style="width: 50%">
<span class="underline h2">Замерим</span>, продумаем дизайн и функционал под ваш бюджет, сделаем план электрики, изготовим, <span class="underline h2">установим</span>, подключим
электрику и сантехнику, уберем мусор.
</p>

<div class="index-icon">
 <div class="d-flex flex-row justify-content-center">
            <div class="icon-block">
            <img src="/img/icon/piggy-bank.png" alt="">
                    <i class="h3 underline">лучшие цены на рынке</i>
                    <p>
                        Производим от Премиум до Эконом класса.
                        Без наценки магазина, напрямую с производства. Сэкономь до 20% от рыночных цен.
                    </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/scientist-woman.png" alt="">
                <i class="h3 underline">наивысшее качество</i>
                <p>
                    Средний стаж каждого сотрудника компании «Solo мебель», более 10 лет в индустрии мебели. Все сотрудники получают оплату, только после 100% сдачи заказа.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/coins.png" alt="">
                <i class="h3 underline">возможность рассрочки</i>
                <p>
                    Производим от Премиум до Эконом класса.
                    Без наценки магазина, напрямую с производства. Сэкономь до 20% от рыночных цен.
                </p>
            </div>
        </div>

<div class="d-flex flex-row justify-content-center">
            <div class="icon-block">
            <img src="/img/icon/credit-card.png" alt="">
                <i class="h3 underline">оплата любым удобным способом</i>
                <p>
                    Наличный расчет, банковская карта,
                    оплата на расчетный счет компании
                    при работе с юр. лицами.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/oven.png" alt="">
                <i class="h3 underline">скидки на технику</i>
                <p>
                    При покупке кухни, Вы получаете скидку на встраиваимую технику в подарок.
                </p>
            </div>

            <div class="icon-block">
            <img src="/img/icon/certificate.png" alt="">
                <i class="h3 underline">10 лет гарантии от производителя</i>
                <p>
                    Послегарантийное обслуживание прописывается в договоре
                </p>
            </div>
</div>
</div>
<div class="index-hr">
    <a href="/call" class="pjax d-block btn-index" style="width: 300px">УЗНАТЬ ПОДРОБНОСТИ</a>
</div>
