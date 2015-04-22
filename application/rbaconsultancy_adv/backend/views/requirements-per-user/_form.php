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
    <?= $form->field($model, 'rlist_id')->hiddenInput()->label(false)?>

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

    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'uploaded_rpu/*'],

        'pluginOptions' => [
                'initialPreview'=>[
                    Html::a($model->rpu_fileuploaded),
                ],
                'initialCaption'=>$model->rpu_fileuploaded,
                'overwriteInitial'=>true
            ]


    ]) ?>
    

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


    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <?php ActiveForm::end(); ?>

</div>
