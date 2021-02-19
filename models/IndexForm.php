<?php


namespace app\models;

use Yii;
use yii\base\Model;

class IndexForm extends Model
{
    public $name;
    public $tel;
    public $reCaptcha;

    public function rules()
    {
        return [
            [['name', 'tel'], 'required', 'message' => 'заполните это поле !'],
            [['name', 'tel'], 'trim'],
           /* [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator3::className(),
                'secret' => Yii::$app->params['secretV3'], // unnecessary if reСaptcha is already configured
                'threshold' => 0.5,
                'action' => 'index',
            ],*/
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(),
                'secret' => Yii::$app->params['secretV2'], // unnecessary if reСaptcha is already configured
                'uncheckedMessage' => 'Подтвердите, что вы не робот'],

        ];
    }

    public function attributeLabels()
    {
        return [
        'reCaptcha' => '',
        'name' => '',
        'tel' => '',
        ];
    }
}