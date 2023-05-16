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
    public $tel;


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
            ['tel', 'string', 'length' => [11, 30]],
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
            'tel' => 'Номер телефона:'
        ];
    }

}
