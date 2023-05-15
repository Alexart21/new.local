<?php
//header('Refresh:3;url= http://solo.local/catalog');

use yii\bootstrap4\Modal;

?>

<?php
//var_dump($msg);die;
//die('jgkjgjgk');

Modal::begin([
    'id' => 'zv',
//    'size' => 'SIZE_SMALL',
//    'header' => '<h3>Отправка сообщения</h3>',
]);
?>

<h3>
    <?php
    echo $msg;
    ?>
</h3>

<?php
Modal::end();
?>