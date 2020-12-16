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
    'id' => 'callback',
    'title' => '<h3>Укажите Ваш номер телефона и мы перезвоним Вам</h3>',
]);
?>
<div class="row call2">
    <div class="col-lg-5">
        <?php Pjax::begin([
            'clientOptions' => [
                'method' => 'POST'
            ],
            'id' => 'call',
            'enablePushState' => false,
            'timeout' => 20000
        ]);
        ?>

        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]], ['id' => 'call-form', 'class' => 'call']); ?>

        <?= $form->field($model, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>


        <?= $form->field($model, 'tel')->textInput(['class' => 'phone', 'required' => true])
            ->widget(MaskedInput::className(), [
                'mask' => '+7 (999) - 999 - 99 - 99',
                /*'clientOptions' => [
                    'placeholder' => '+7 (999) - 999 - 99 - 99'
                ],*/

            ]);
        ?>


        <!--        --><?//= $form->field($model, 'robot')->checkboxList(['r' => '__Я не робот'])->label(false); ?>

        <div class="form-group">
            <?= Html::submitButton('жду звонка!', ['class' => 'btn-zamer']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
<?php
Modal::end();
?>
<script>
    $('#callback').modal('show');
</script>
