<?php


namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'email'=>'Эмейл',
            'text'=>'Текст сообщения'
        ];
    }

    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email','email'],
            //['name', 'string','min'=>2, 'tooShort'=>'tooshort'],
            //['name', 'string','max'=>5, 'tooLong'=>'tooLong'],
            ['name','myRule'],
           // ['text','trim'],
        ];
    }

    public function myRule($attr){
        if(!in_array($this->$attr, ['hello','world'])){
            $this->addError($attr, 'Wrong!');
        }
    }
}