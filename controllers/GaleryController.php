<?php

namespace app\controllers;

use Yii;
use app\models\Galery;
use app\models\Content;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

//use yii\web\Controller;


class GaleryController extends \yii\web\Controller
{
    public $layout = 'galery';

    public function actionIndex()
    {
        throw new NotFoundHttpException();
    }

    /* Отдельная картинка в модальном окне */
    public function actionAjax($id)
    {
//        return $this->renderAjax('ajax');
        $request = Yii::$app->request;
        if ($request->isAjax) {
            $imgData = Galery::getImg($id);
            return $this->renderAjax('ajax', ['imgData' => $imgData]);
        }
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
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('kitchen', $data);
    }

    /* Прямые купе */
    public function actionLkupe()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('lkupe', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'lkupe'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('lkupe', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('lkupe', $data);
    }


    /* Радиусные купе */
    public function actionKupe()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('kupe', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'kupe'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('kupe', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('kupe', $data);
    }

    /* Стенки */
    public function actionWall()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('wall', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'wall'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('wall', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('wall', $data);
    }

    /* Офисная */
    public function actionOffice()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('office', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'office'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('office', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('office', $data);
    }

    /* Детские */
    public function actionChildrens()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('childrens', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'childrens'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('childrens', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('childrens', $data);
    }

    /* Прихожие */
    public function actionHall()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('hall', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'hall'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('hall', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('hall', $data);
    }

    /* Спальные гарнитуры */
    public function actionBedroom()
    {
        $pageNum = !empty($_GET['page']) ? (int) $_GET['page'] : null;
        $cache = Yii::$app->cache;
        $key = Yii::$app->requestedAction->id . $pageNum;
        /* Проверяем кэш */
        $data = $cache->get($key);
        if ($data) {
            return $this->render('bedroom', $data);
        }

        $totalCount = Galery::find()->where(['category' => 'bedroom'])->count();
        $pagination = new Pagination([
            'PageSize' => 10, // сколько показывать на странице
            'totalCount' => $totalCount, // общее кол-во (в данном случае все)
            'forcePageParam' => false, // для ЧПУ
            'pageSizeParam' => false,// убирает GET параметр per-page из адресной строки
        ]);
        /* макс. количестово кнопок (по умолчанию там 10) */
//        \Yii::$container->set('yii\widgets\LinkPager', ['maxButtonCount' => 5]);
        $imgData = Galery::getCategory('bedroom', $pagination->offset, $pagination->limit);
        $model = new Content();
        $content = $model->getContent();
        $data = [
            'pagination' => $pagination,
            'imgData' => $imgData,
            'content' => $content,
            'pageNum' => $pageNum,
        ];
        // set cache
        //15552000 - 180 суток
        $cache->set($key, $data, 15552000);
        return $this->render('bedroom', $data);
    }
}
