<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\widgets\DateTimePicker;
use kartik\widgets\FileInput;

use common\models\ServiceList;
use common\models\UserMain;
use common\models\RequirementsList;


/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>  

  <!--   <?= $form->field($model, 'rlist_id')->textInput(array('readonly' => true, 'placeholder' => 'Requirement No. is auto-generated.'))->label('Requirement No.') ?>
 -->
    <?php 
        $user=RequirementsList::find()->all();

        $listData=ArrayHelper::map($user,'rlist_id','rlist_name');

        echo $form->field($model, 'rlist_id')->dropDownList(
                                $listData, 
                                ['readonly' => true, 'prompt'=>'Select Requirement...'])->label('Requirements') ;
    ?>

<!--     <?php 
        $user=UserMain::find()->all();

        $listData=ArrayHelper::map($user,'id','username');

        echo $form->field($model, 'user_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select User...'])->label('Acquired by') ;
    ?>

    <?php
            $ServiceList=ServiceList::find()->all();
    
            $listData=ArrayHelper::map($ServiceList,'slist_id','slist_name');
    
            echo $form->field($model, 'service_id')->dropDownList(
                                    $listData,
                                    ['prompt'=>'Select Service...'])->label('Service Acquired') ;
    ?> -->

<<<<<<< HEAD
    <?= $form->field($model, 'file')->widget(FileInput::classname(),[
        'name' => 'attachment_3',
        ])->label('Upload File') ?>
=======
    <?= $form->field($model, 'file')->fileInput()->label('File Uploaded') ?>
	
    <?= $form->field($model, 'rpu_datefilesubmitted')->textInput()->label('Date Submitted') ?>
>>>>>>> 8a50f006aa3a6454f2865fbb0f793d179c59ca0c
    

    <?= $form->field($model, 'rpu_datefilesubmitted')->widget(DateTimePicker::classname(), [
        'readonly' => false,
        'options' => ['placeholder' => 'Date Added ...'],
        'pluginOptions' => [
            'autoclose' => true,            
            'format' => 'yyyy-mm-dd hh:ii:ss',
        ]
    ]); ?>

     <?php echo $form->field($model, 'rpu_status')->dropDownList(
        ['Not Yet Submitted' => 'Not Yet Submitted',
         'Submitted' => 'Submitted'],
         ['prompt'=>'Select Status...'])->label('Status'); ?>

    <br>
    <br>
    <br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
