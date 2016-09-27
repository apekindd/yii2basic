<?php
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\Html;
?>
<h1>Test Action</h1>
<?php
if(Yii::$app->session->hasFlash('success')){?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php } ?>
<?php if(Yii::$app->session->hasFlash('error')){?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php  echo Yii::$app->session->getFlash('error'); ?>
    </div>

<?php  }
?>
<?php
$form = ActiveForm::begin(['options'=>['id'=>'testForm']]);
echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'text')->textarea(['rows'=>5]);
echo Html::submitButton('SEND',['class'=>'btn btn-success']);
ActiveForm::end();

//example your template
//echo $form->field($model, 'name', ['template' => '<div class="input-group">{input}</div><div clas="err">Div for errors</div>',