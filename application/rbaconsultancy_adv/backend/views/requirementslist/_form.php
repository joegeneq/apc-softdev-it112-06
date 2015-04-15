<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-list-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'rlist_id')->textInput(array('readonly' => true, 'placeholder' => 'Requirement ID is auto-generated.'))->label('Requirement ID')?>

    <?= $form->field($model, 'rlist_name')->textInput(['maxlength' => 255])->label('Requirement') ?>

    <?= $form->field($model, 'rlist_desc')->textarea(['rows' => 6])->label('Description') ?>

    <?= $form->field($model, 'rlist_dateadded')->widget(DateTimePicker::classname(), [
        'readonly' => true,
        'options' => ['placeholder' => 'Date Added ...'],
        'pluginOptions' => [
            'autoclose' => true,            
            'format' => 'yyyy-mm-dd hh:ii:ss',
        ]
    ]); ?>

  	<?php
	        $ServiceList=ServiceList::find()->all();
	
	        $listData=ArrayHelper::map($ServiceList,'slist_id','slist_name');
	
	        echo $form->field($model, 'slist_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select Service...'])->label('Service') ;
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href=".\index.php?r=requirementslist%2Findex">Back</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
