<?php
header('Last-Modified:' . gmdate("D, d M Y H:i:s \G\M\T", $content[0]['last_mod']));
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$pageNum = $pageNum ? ' | страница ' . $pageNum : null;
$this->title = 'Радиусные шкафы купе на заказ в Чебоксарах' . $pageNum;
$this->registerMetaTag(['name' => 'keywords', 'content' => $content[0]['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $content[0]['descrition']]);

const IMG_W = 310; // ширина иконок
const IMG_H = 250; // высота иконок
?>
<h1 class="header_shadow text-center" >Радиусные шкафы купе в Чебоксарах от <i><?= Yii::$app->params['company'] ?></i></h1>

<div class="galery-small container d-flex flex-row flex-wrap">
    <?php
    $delay = 0.1;
    ?>
    <?php foreach ($imgData as $item): ?>
        <div class="raised flex-center img-thumbnail">
            <figure  class="snip1584"  data-scrollreveal="enter left and move 500px, wait <?= $delay ?>s">
                <img width="<?= IMG_W ?>" height="<?= IMG_H ?>" src="/upload/resize_img/Galeries/Galery<?= $item['itemId'] ?>/<?= $item['urlAlias'] ?>.jpg" alt=""/>
                <figcaption>
                    <h3><?= $item['title'] ?></h3>
                    <?php if ($item['price']) : ?>
                        <h5><?= $item['price'] ?>&nbsp;<i class="fa fa-ruble-sign"></i></h5>
                    <?php endif; ?>
                </figcaption>
                <a class="pjax" href="/galery/ajax?id=<?= $item['id'] ?>"></a>
            </figure>
            <?php
            $delay += 0.1;
            ?>
        </div>
    <?php endforeach; ?>
</div>
<?= LinkPager::widget([
    'pagination' => $pagination,
    'nextPageLabel' => '<i class="fa fa-forward"></i>',
    'prevPageLabel' => '<i class="fa fa-backward"></i>',
]) ?>
