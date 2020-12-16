<?php


namespace app\models;

//use Yii;
use yii\base\Model;

class IndexForm extends Model
{
    public $name;
    public $tel;
//    public $reCaptcha;

    public function rules()
    {
        return [
            [['name', 'tel'], 'required', 'message' => 'заполните это поле !'],
            [['name', 'tel'], 'trim'],
            /*[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator3::className(),
                'secret' => '6Le5fgIaAAAAAJDEpFRiyRSV5EMzNZUKiwcf3ZHn', // unnecessary if reСaptcha is already configured
                'threshold' => 0.5,
                'action' => 'index',
            ],*/

        ];
    }

    public function attributeLabels()
    {
        return [
//            'reCaptcha' => '',
        'name' => '',
        'tel' => '',
        ];
    }
}