<?php
/**
 * Created by PhpStorm.
 * User: apekin
 * Date: 19.09.2016
 * Time: 16:31
 */

namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
      // return $this->render('index', ['hello'=>$hi, 'names'=>$names]);
       return $this->render('index', compact('hi', 'names', 'id'));
        //
    }

    public function actionBlogPost(){
       return $this->render('blog-post');
    }
}