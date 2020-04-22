<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 09.08.2019
 * Time: 0:02
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return 'category';
    }

    public function getProducts(){
        return $this->hasMany(Product::classname(), ['category_id]' => 'id']);
    }
}