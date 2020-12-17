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

<script>
    $('#zv').modal('show');
    // document.querySelector('audio').play();
    // через 4 сек удаляем сообщение
    setTimeout(function() {
        $('#zv').modal('hide');
        const f = document.forms;
        for(let i=0; i<f.length; i++){
            f[i].reset();
        }
    }, 4000);

</script>