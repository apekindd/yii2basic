<?php

namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget
{
    public $name;

    public function init(){
        parent::init();
//        if($this->name === null) $this->name = 'Guest';
        ob_start();
    }

    public function run(){
//        return "<h1>{$this->name}, Hello World</h1>";
//        return $this->render('my', ['name'=>'John Doe']);
        $content = ob_get_clean();

        return $this->render('my',compact('content'));
    }
}