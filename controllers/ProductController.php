<?php


namespace app\controllers;

use Yii;
use app\models\Product;
use yii\helpers\Url;

class ProductController extends AppController
{
    public function actionIndex(){
        $products = Product::find()->asArray()->all();

        return $this->render('index',compact('products'));
    }

    public function actionDetail($id = null){
        $request = Yii::$app->request;
        $id = (int)$request->get('id');
        if($id === 0){
            return Yii::$app->response->redirect(Url::to(['product/']));
        }
        $product = Product::find()->where(['=','id', $id])->limit(1)->one();
        if(count($product) === 0){
            return Yii::$app->response->redirect(Url::to(['product/']));
        }
        return $this->render('detail',compact('product'));
    }
}