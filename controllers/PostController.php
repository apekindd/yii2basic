<?php

namespace app\controllers;

use Yii;
use app\models\TestForm;
use app\models\Category;

class PostController extends AppController
{
   public $layout = 'basic';

    public function actionIndex(){

        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();

        //check request
        if( $model->load(Yii::$app->request->post()) ){
            if( $model->validate() ){
                Yii::$app->session->setFlash('success','Данные приняты');
                //clean post
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error','Ошибка');
            }
        }

        return $this->render('test', compact('model'));
    }  
    public function actionShow(){
        $this->view->title = 'Post';
        //Метатеги
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'Ключи']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'Описание']);

//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['id'=>SORT_DESC])->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->asArray()->where('id=3')->all();
//        $cats = Category::find()->asArray()->where(['id'=>2])->all();
//        $cats = Category::find()->asArray()->where(['like','title','un'])->all();
//        $cats = Category::find()->asArray()->where(['>=','id','3'])->limit(2)->all();
//        $cats = Category::find()->asArray()->where(['>=','id','3'])->limit(1)->one();

        return $this->render('show', compact('cats'));
    }
}{
}