<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use common\models\UserMain;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'service_id')->textInput(array('readonly' => true, 'placeholder' => 'Transaction Code is auto-generated.'))->label('Transaction Code')?>

    <?php 
        $user=UserMain::find()->all();

        $listData=ArrayHelper::map($user,'id','username');

        echo $form->field($model, 'user_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select User...'])->label('Acquired by') ;
    ?>

    <?php 
        $service_name=ServiceList::find()->all();

        $listData=ArrayHelper::map($service_name,'slist_id','slist_name');

        echo $form->field($model, 'slist_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select Service...'])->label('Service Acquired') ;
    ?>

  	<?= $form->field($model, 'service_dateapplied')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
		 'options' => ['placeholder' => 'Select Date of Application ...'],
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
	]);?>

    <?= $form->field($model, 'service_status')->dropDownList([
                'Pending' => 'Pending', 'Ongoing' => 'Ongoing', 'Completed' => 'Completed', 'Cancelled' => 'Cancelled'])
                ->label('Visa Application Status')  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
