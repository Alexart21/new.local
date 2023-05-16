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
        <?php $form = ActiveForm::begin(['options' => ['id' => 'call-form']]); ?>

        <?= $form->field($model, 'name')->textInput(['class' => 'index-field', 'required' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>


        <?= $form->field($model, 'tel')->textInput(['class' => 'phone', 'required' => true])
            ->widget(MaskedInput::className(), [
                'mask' => '+7 (999) - 999 - 99 - 99',
            ]);
        ?>
        <input type="hidden" class="reCaptcha-field" name="reCaptcha"/>
        <div class="form-group">
            <div class="form-loader"></div>
            <button type="submit" class="btn btn-zamer">оставить заявку</button>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php
Modal::end();
?>
<script>
    $('#callback').modal('show');
</script>
<script>
    let callForm = document.getElementById('call-form');
    callForm.onsubmit = (e) => {
        e.preventDefault();
        startFormLoader(callForm);
        grecaptcha.ready(function () {
            grecaptcha
                .execute("<?= Yii::$app->params['siteKeyV3']  ?>", {
                    action: "post",
                })
                .then(async function (token) {
                    /* Все дальнейшие операции только после получения reCaptcha токена !!! */
                    // все hidden инпуты с reCaptcha
                    let inputs = document.getElementsByClassName("reCaptcha-field");
                    inputs = Array.from(inputs);
                    inputs.map((input) => {
                        input.value = token;
                    });
                    let formData = new FormData(callForm);
                    let response = await fetch("/call", {
                        method: 'POST',
                        body: formData
                    })
                    .finally(() => {
                        stopFormLoader(callForm);
                    });
                    console.log(response)
                    if (response.ok) {
                        // console.log('OK!!!');
                        result = await response.json();
                        if (result.success) { // успешно
                            $.toaster({
                                priority : 'success',
                                title : 'Спасибо, Ваша заявка принята!',
                                message : ''
                            });
                        }
                    }else{
                        $.toaster({ priority : 'danger',
                            title : 'Ошибка сервера!',
                            message : ''
                        });
                    }
                    console.log(response);
                })
        });
    }
</script>
