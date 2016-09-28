<?php
use yii\helpers\Html;
use yii\helpers\Url;

foreach ($products as $product) {
    echo "<li>";
    echo Html::a($product['title'], Url::toRoute(["product/detail", "id"=>$product['id']]));
    echo "</li>";
}
//echo '<pre>';print_r($products); echo '</pre>';