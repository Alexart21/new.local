<?php
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

$this->title = 'Call';
?>
<?php
Modal::begin([
    'id' => 'mail-f',
    'title' => '<h3>Связаться с нами</h3>',
]);
?>

<?php $form = ActiveForm::begin([
    'id' => 'contact-form',
]);
?>

<?= $form->field($model, 'name')->textInput(['class' => 'index-field', 'required' => true, 'tabindex' => '1', 'placeholder' => 'Ваше имя'])->label(false) ?>

<?= $form->field($model, 'email')->input('email', ['class' => 'index-field', 'tabindex' => '2', 'placeholder' => 'E-mail'])->label(false) ?>

<input type="hidden" name="ContactForm[subject]" value="Сообщение с сайта s-solo.ru">

<?= $form->field($model, 'tel')->textInput(['class' => 'phone'])
    ->widget(MaskedInput::class, [
        'mask' => '+7 (999) - 999 - 99 - 99',
    ]);
?>

<?= $form->field($model, 'body')->textarea(['rows' => 6, 'tabindex' => '4', 'placeholder' => 'Текст сообщения'])->label(false) ?>
<input type="hidden" class="reCaptcha-field" name="reCaptcha"/>

<div class="form-group">
    <div class="form-loader"></div>
    <button type="submit" class="btn btn-zamer">оставить заявку</button>
</div>

<?php ActiveForm::end(); ?>

<?php
Modal::end();
?>
<script>
    $('#mail-f').modal('show');
</script>
<script>
    let contactForm = document.getElementById('contact-form');
    contactForm.onsubmit = (e) => {
        e.preventDefault();
        startFormLoader(contactForm);
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
                    let formData = new FormData(contactForm);
                    let response = await fetch("/contact", {
                        method: 'POST',
                        body: formData
                    })
                    .finally(() => {
                       stopFormLoader(contactForm);
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
                            setTimeout(() =>{
                                contactForm.reset();
                                $('#mail-f').modal('hide');
                            }, 2000);
                        }
                    }else{
                        $.toaster({ priority : 'danger',
                            title : 'Ошибка сервера!',
                            message : ''
                        });
                    }
                    $('#container_loading').hide();
                    console.log(response);
                })
        });
    }
</script>
