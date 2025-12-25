<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    // =============================
    // LANDING PAGE PUBLIK
    // =============================
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMenu()
    {
        return $this->render('menu');
    }

    public function actionTentang()
    {
        return $this->render('tentang');
    }

    public function actionKontak()
    {
        return $this->render('kontak');
    }

    // =============================
    // LOGIN ADMIN & KASIR
    // =============================
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirectByRole();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirectByRole();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    protected function redirectByRole()
    {
        $role = strtolower((string)(Yii::$app->user->identity->role ?? ''));

        if (in_array($role, ['admin', '1'], true)) {
            return $this->redirect(['admin/index']);
        }

        if (in_array($role, ['kasir', '2'], true)) {
            return $this->redirect(['kasir/index']);
        }

        return $this->goHome();
    }
}
