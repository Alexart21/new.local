<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\Response;

class callForm extends Model
{
    public $name;
    public $tel;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'tel'], 'required', 'message' => 'заполните это поле !'],
            ['name', 'string', 'length' => [3, 50]],
            ['tel', 'string', 'length' => [11, 30]],
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
        ];
    }

}