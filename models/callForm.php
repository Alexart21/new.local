<?php
namespace app\models;

use Yii;
use yii\base\Model;


class callForm extends Model
{
    public $name;
    public $tel;
    public $reCaptcha;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'tel'], 'required', 'message' => 'заполните это поле !'],
            ['name', 'string', 'length' => [3, 50]],
            ['tel', 'string', 'length' => [11, 30]],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(),
                'secret' => Yii::$app->params['secretV2'], // unnecessary if reСaptcha is already configured
                'uncheckedMessage' => 'Подтвердите, что вы не робот'],
        ];
    }



    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'tel' => 'Номер телефона',
            'reCaptcha' => '',
        ];
    }


    public function callSend()
    {
//        debug($this->tel);die;
        $subject = 'Просьба перезвонить';
        $name = clr_get(mb_ucfirst($this->name));
        $tel = clr_get($this->tel);

        $body = 'Клиент &nbsp;<b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b>&nbsp; просит перезвонить.<br>' .
            'Тел. :&nbsp;&nbsp;<b style="font-size: 110%;>' . $tel . '</b>' .
            '<br><br>Сообщение отправлено с сайта <b>https://www.s-solo.ru</b>';

        $success = Yii::$app->mailer->compose()
            ->setTo('mail@s-solo.ru')
            ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
            ->setSubject($subject)
            ->setHtmlBody($body)
            ->send();

        $msg = $success ? '<h3 style="color:green">Спасибо, ' . $name . ', Мы Вам обязательно перезвоним</h3>' : '<h3 style="color:green">Сбой, попробуйте еще раз или свяжитесь другим способом</h3>';
        return $msg;
    }
}