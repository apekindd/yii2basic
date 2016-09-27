<?php
//$this->title='Post!';
?>

<?php $this->beginBlock('block1');?>
    <h1>Заголовок Страницы</h1>
<?php $this->endBlock();?>

<h1>Show Action</h1>

<?php echo '<pre>';print_r($cats); echo '</pre>'; ?>

<?php
//foreach ($cats as $cat) {
//    echo $cat->title ."<br/>";
//}
?>
<button class="btn btn-success" id="btn">Click me...</button>
<?php
//$this->registerJsFile('@web/js/script.js',['depends'=>'yii\web\YiiAsset']);
//$this->registerJs("$('.container').append('<p>SHOW</p>');");

$js = <<< JS
$('#btn').on('click', function(){
    $.ajax({
        url: 'index.php?r=post/index',
        data: {test:'123'},
        type: 'POST',
        success: function(res){
            console.log(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});
JS;
$this->registerJs($js);

?>