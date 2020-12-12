<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use app\models\Content;

//use rico\yii2images;

/**
 * This is the model class for table "galery".
 *
 * @property integer $id
 * @property string $path
 * @property string $price
 * @property integer $timestamp
 * @property string $alt
 */
class Galery extends ActiveRecord
{
//    public $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galery';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['path'], 'required'],
            [['timestamp'], 'integer'],
            [['path'], 'string', 'max' => 50],
            [['alt'], 'string', 'max' => 200],
            [['price'], 'string', 'max' => 20],
//            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'timestamp' => 'Timestamp',
            'alt' => 'Alt',
        ];
    }


    /**
     * @return Unix timestamp с датой последней модификации из таблицы content
     */
    public static function getLastMod ()
    {
        // имя экшена
        $act = Yii::$app->requestedAction->id;
        // Подготовленный запрос
       $sql = 'SELECT last_mod FROM content WHERE `page`=:act';
       $data = ActiveRecord::findBySql($sql, [':act' => $act])->asArray()->one();
        return $data['last_mod'];
    }

    /* Вывод отдельной картинки */
    /**
     * @param $id id картинки из GET параметра
     * @return array|mixed|null|ActiveRecord
     */
    public static function getImg($id)
    {
        $id = intval($id);

        $lastSql = "CALL getLastFromImg('$id')";
        $last = ActiveRecord::findBySql($lastSql)->asArray()->one();
        $last = $last['timestamp'];

        // дергаем кэш
        $imgData = Yii::$app->cache->get($id);
        if ($imgData) {
            array_push($imgData, $last);
            return $imgData;
        }
        /* Подготовленный запрос */
        $sql = "SELECT galery.id, galery.title, galery.price, galery.description, galery.full_text, galery.timestamp, image.filePath, image.isMain, image.itemId FROM galery
                INNER JOIN image
                ON (galery.id = :id AND image.itemId = :id) AND image.isMain=1";
        $imgData = ActiveRecord::findBySql($sql, [':id' => $id])->asArray()->one();
        array_push($imgData, $last); // добавляем Unix timestamp с датой последней модификации

        /* Хранимая процедура */
        /*$sql = "CALL getImgById($id)";
        $imgData = ActiveRecord::findBySql($sql)->asArray()->one();
         Yii::$app->cache->set($id, $imgData, 15552000); // 15552000 - 180 суток
         array_push($imgData, $last); // добавляем Unix timestamp с датой последней модификации
         */
        return $imgData;
    }

    public static function getCategory($category, $offset, $limit)
    {
        /* Чистый SQL */
        $sql = "SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery
                INNER JOIN image
        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = '$category' LIMIT $limit OFFSET $offset";
        $data = ActiveRecord::findBySql($sql)->asArray()->all();


        $data = ActiveRecord::findBySql($sql)->asArray()->all();

        return $data;
    }
}
