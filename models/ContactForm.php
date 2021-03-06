<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $reCaptcha;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required', 'message' => 'заполните это поле !'],
            ['name', 'string', 'length' => [3, 100]],
            // email has to be a valid email address
            ['email', 'email', 'message' => 'Некорректный e-mail адрес !'],
            ['subject', 'trim'],
            ['subject', 'string', 'max' => 1000, 'tooLong' => 'не более 1000 символов'],
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
            'name' => 'Ваше Имя',
            'email' => 'Email',
            'subject' => 'Тема',
            'body' => 'Сообщение',
            'reCaptcha' => '',
        ];
    }


    public function contactSend()
    {
//        var_dump($this->robot);die;
        if ($this->validate()) {
            $subject = $this->subject ? clr_get($this->subject) : 'Без темы';
            $name = mb_ucfirst(clr_get($this->name));
            $body = 'Вам пишет <b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b><br>' . clr_get($this->email) . '<br><br><div style="font-style: italic">' . nl2br(clr_get($this->body)) . '</div>' .
            '<br><br>Сообщение отправлено с сайта <b>https://www.s-solo.ru</b>';
            $success = Yii::$app->mailer->compose()// Yii::$app->params['adminEmail'] [clr_get($this->email) => $name]
            ->setTo('mail@s-solo.ru')
                ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
                ->setReplyTo([clr_get($this->email) => $name])
                ->setSubject($subject)
                ->setHtmlBody($body)
                ->send();

            If ($success) {
                    die('<h3 style="color:green">Спасибо, ' . $name . ', Ваше сообщение отправлено</h3>');
            } else {
                die('<h3 style="color:red">Ошибка !</h3>');
            }
        }
    }

}
