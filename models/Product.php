<?php


namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public function getCategories(){
        return $this->hasOne(Category::className(), ['id'=>'category_id']);
    }

    /*
     * if table name - not like Model
     *
     * public static function tableName(){
        return 'table_name';
    }*/

}