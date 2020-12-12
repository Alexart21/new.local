<?php

namespace app\controllers;

use Yii;
use app\models\Galery;
use app\models\Content;
use yii\data\Pagination;

//use yii\web\Controller;


class GaleryController extends \yii\web\Controller
{
    public $layout = 'galery';

    /* Отдельная картинка в модальном окне */
    public function actionAjax($id)
    {
        $imgData = Galery::getImg($id);
        return $this->renderAjax('ajax', ['imgData' => $imgData]);
    }


    /* Кухни */
    public function actionKitchen()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('kitchen', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'kitchen'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('kitchen', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        // 86400 - сутки
        // 604800 - неделя
        // 18144000 - 30 дней
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('kitchen', $data);
    }

    /* Прямые купе */
    public function actionLkupe()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('Lkupe');

        return $this->render('Lkupe', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }


    /* Радиусные купе */
    public function actionKupe()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('kupe');

        return $this->render('kupe', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }

    /* Стенки */
    public function actionWall()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('wall');

        return $this->render('wall', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }

    /* Офисная */
    public function actionOffice()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('office');

        return $this->render('office', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }

    /* Детские */
    public function actionChildrens()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('childrens');

        return $this->render('childrens', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }

    /* Прихожие */
    public function actionHall()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('hall');

        return $this->render('hall', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }

    /* Спальные гарнитуры */
    public function actionBedroom()
    {
        $lastMod = Galery::getLastMod(); // timestamp для заголовка LastModified
        $data = Galery::getCategoryData('bedroom');

        return $this->render('bedroom', [
            'pagination' => $data['pagination'],
            'imgData' => $data['imgData'],
            'content' => $data['content'],
            'lastMod' => $lastMod,
        ]);
    }
}
