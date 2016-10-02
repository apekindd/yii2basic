<?php
use yii\helpers\Html;
use yii\helpers\Url;

echo "<h2>".$product->title."</h2>";
echo "<p>Category: ".$product->category_id."</p>";
echo "<p>Content: ".$product->content."</p>";
echo Html::a('back',Url::to(['product/']));

