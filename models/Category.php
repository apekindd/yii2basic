<?php


namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    //hasMany hasOne
    //"get" is required
    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id'=>'id']);
    }

    /*
     * if table name - not like Model
     *
     * public static function tableName(){
        return 'table_name';
    }*/

}