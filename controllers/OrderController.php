<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionCreate()
    {
        $product = Yii::$app->request->post('product');
        $qty = (int) Yii::$app->request->post('qty');
        $harga = 5000;
        $total = $qty * $harga;

        Yii::$app->db->createCommand()->insert('orders', [
            'user_id' => Yii::$app->user->id,
            'product' => $product,
            'qty' => $qty,
            'total' => $total,
            'status' => 'menunggu',
        ])->execute();

        return $this->redirect(['pelanggan/index']);
    }
}
