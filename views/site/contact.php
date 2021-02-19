<?php
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

$this->title = 'Call';
?>
<?php
Modal::begin([
    'id' => 'mail-f',
    'title' => '<h3>Отправка Email</h3>',
]);
?>

<?php Pjax::begin([
    'clientOptions' => [
        'method' => 'POST'
    ],
    'id' => 'contact',
    'enablePushState' => false,
    'timeout' => 20000
]);
?>

<?php $form = ActiveForm::begin([
    'id' => 'contact-form',
    'options' => ['data-pjax' => true],
]);
?>

<?= $form->field($model, 'name')->textInput(['class' => 'index-field', 'required' => true, 'tabindex' => '1', 'placeholder' => 'Ваше имя'])->label(false) ?>

<?= $form->field($model, 'email')->input('email', ['class' => 'index-field', 'tabindex' => '2', 'placeholder' => 'E-mail'])->label(false) ?>

<?= $form->field($model, 'subject')->textInput(['class' => 'index-field', 'tabindex' => '3', 'placeholder' => 'тема'])->label(false) ?>

<?= $form->field($model, 'body')->textarea(['rows' => 6, 'tabindex' => '4', 'placeholder' => 'Текст сообщения'])->label(false) ?>

<?= $form->field($model, 'reCaptcha')->widget(
    \himiklab\yii2\recaptcha\ReCaptcha2::className(),
    [
        'siteKey' => Yii::$app->params['siteKeyV2'], // unnecessary is reCaptcha component was set up
    ]
) ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn-zamer', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>

<?php
Modal::end();
?>
<script>
    $('#mail-f').modal('show');
</script>
