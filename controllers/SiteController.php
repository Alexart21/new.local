<?php

namespace app\controllers;

use Yii;

//use yii\helpers\Html;
use app\models\ContactForm;
use app\models\Content;
use app\models\LoginForm;
use app\models\callForm;
use app\models\IndexForm;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;

class SiteController extends Controller
{
    /*public function actionError()
    {
        $errorCode = Yii::$app->errorHandler->exception->statusCode;
        $errorMsg = Yii::$app->errorHandler->exception->getMessage();
            if ($errorCode == 404) {
                $this->layout = '_404';
               return $this->render('_404', ['errorMsg' => $errorMsg]);
            }
    }*/
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['login', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            /*'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],*/
        ];
    }

    public function actionIndex()
    {

        $request = Yii::$app->request;
        $indexForm = new IndexForm();
        if ($request->isPost) {
            if ($indexForm->load($request->post()) && $indexForm->validate()) {
//                die('here');
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                // проверка ReCaptcha V3
                $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
                $recaptcha_secret = Yii::$app->params['secretV3'];
                $value = $_POST['reCaptcha'];
                $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $value);
                $recaptcha = json_decode($recaptcha);
                $score = $recaptcha->score;
                $result = $score > 0.5 ?? false;
                if (!$result) {
                    $response = [
                        'success' => false,
                        'msg' => 'ReCaptcha error'
                    ];
                    return $response;
                }
//                die('her blin2');
                $subject = 'Обратный звонок';
                $name = $indexForm->name ? mb_ucfirst($indexForm->name) : null;
                $tel = $indexForm->tel ? $indexForm->tel : null;
                $body = 'Клиент &nbsp;<b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b>&nbsp; просит перезвонить.<br>' .
                    'Тел. :&nbsp;&nbsp;<b style="font-size: 110%;>' . $tel . '</b>';

                $success = Yii::$app->mailer->compose()
                    ->setTo('mail@s-solo.ru')
                    ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
                    ->setSubject($subject)
                    ->setHtmlBody($body)
                    ->send();

                if ($success) {
                    $response = [
                        'success' => true,
                        'msg' => 'ok'
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'msg' => 'Email error'
                    ];
                }
                return $response;
            }
        }
        $model = new Content();
        $data = $model->getContent();

        return $this->render('index', compact('data', 'indexForm'));
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user = strtolower(Yii::$app->user->identity->username);
            if ($user === Yii::$app->params['admin']) {
                return $this->redirect('/admin');
            }
            return $this->goBack();
        }
//        die('here2');
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    /* Форма отправки сообщения */
    public function actionContact()
    {
        $request = Yii::$app->request;
        $model = new ContactForm();
        if ($request->isPost) {
            if ($model->load($request->post()) && $model->validate()) {
                $subject = $model->subject ? clr_get($model->subject) : 'Без темы';
                $name = mb_ucfirst(clr_get($model->name));
                $body = 'Вам пишет <b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b><br>' . clr_get($model->email) . '<br><br><div style="font-style: italic">' . nl2br(clr_get($model->body)) . '</div>' .
                    '<br><br>Сообщение отправлено с сайта <b>https://www.s-solo.ru</b>';
                $success = Yii::$app->mailer->compose()// Yii::$app->params['adminEmail'] [clr_get($this->email) => $name]
                ->setTo('mail@s-solo.ru')
                    ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
                    ->setReplyTo([clr_get($model->email) => $name])
                    ->setSubject($subject)
                    ->setHtmlBody($body)
                    ->send();
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                if ($success) {
                    $response = [
                        'success' => true,
                        'msg' => 'ok'
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'msg' => 'Email error'
                    ];
                }
                return $response;
            }
        }

        //  выводим контактную форму
        return $this->renderAjax('contact', ['model' => $model]);
    }

    /* Страница контакты */
    public function actionCoordinates()
    {
        $this->layout = 'galery';
        return $this->render('coord');
    }


    /* Вызов дизайнера (не использую) */
    /*public function actionDesigner()
    {
        $model = new DesignerForm();
        if ($model->load(Yii::$app->request->post())) { // данные пришли
//            sleep(2);
            $model->designerSend(); // валидация, отправка почты, вывод сообщения об успехе(ошибке) и завершение скрипта
        }
        //  выводим форму на заявку выезда дизайнера
        return $this->renderAjax('designer', ['model' => $model]);
    }*/

    /* Политика конфедициальности */
    public function actionPolitic()
    {
        return $this->renderFile(__DIR__ . '/../views/site/politic.php');
    }

    /* Вакансии */
    /*public function actionVacancies()
    {
        $this->layout = 'galery';
        return $this->render('vacancies');
    }*/

    /* Виджет обратного звонка */
    public function actionCall()
    {

        $request = Yii::$app->request;
        $model = new callForm();
        if ($request->isPost) {
            if ($model->load($request->post()) && $model->validate()) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                $subject = 'Просьба перезвонить';
                $name = clr_get(mb_ucfirst($model->name));
                $tel = clr_get($model->tel);

                $body = 'Клиент &nbsp;<b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b>&nbsp; просит перезвонить.<br>' .
                    'Тел. :&nbsp;&nbsp;<b style="font-size: 110%;>' . $tel . '</b>' .
                    '<br><br>Сообщение отправлено с сайта <b>https://www.s-solo.ru</b>';
                $success = Yii::$app->mailer->compose()
                    ->setTo('mail@s-solo.ru')
                    ->setFrom(['mail@s-solo.ru' => 's-solo.ru'])
                    ->setSubject($subject)
                    ->setHtmlBody($body)
                    ->send();

                if ($success) {
                    $response = [
                        'success' => true,
                        'msg' => 'ok'
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'msg' => 'Email error'
                    ];
                }
                return $response;
            }

        }
        // выводим форму  в модальном окне
        return $this->renderAjax('call', ['model' => $model]);
    }

    public function actionCatalog()
    {
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
        Yii::$app->response->send();
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="catalog.pdf"');
        header('Cache-Control: private, max-age=0, must-revalidate');
        header('Pragma: public');
        ini_set('zlib.output_compression', '0');

        $pdf = file_get_contents(__DIR__ . '/../web/files/catalog.pdf');
        die($pdf);
    }

}
