<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class KasirController extends Controller
{
    public function actionIndex()
    {
        $role = Yii::$app->user->isGuest ? null : strtolower((string)Yii::$app->user->identity->role);
        if ($role === null || !in_array($role, ['kasir', '2'], true)) {
            throw new \yii\web\ForbiddenHttpException();
        }
        return $this->render('index');
    }
}
