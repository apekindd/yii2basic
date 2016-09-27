<?php


namespace app\models;

use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
    /* Need only for model, not for ActiveRecord
     public $name;
     public $email;
     public $text;
    */

    public static function tableName(){
        return 'posts';
    }

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
            [['name','text'], 'required'],
            ['email','email'],
            //['name', 'string','min'=>2, 'tooShort'=>'tooshort'],
            //['name', 'string','max'=>5, 'tooLong'=>'tooLong'],
            //['name','myRule'],
        ];
    }
    /*
    public function myRule($attr){
        if(!in_array($this->$attr, ['hello','world'])){
            $this->addError($attr, 'Wrong!');
        }
    }
    */
}