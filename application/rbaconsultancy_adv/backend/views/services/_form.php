<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\widgets\DateTimePicker;

use common\models\UserMain;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'service_id')->hiddenInput()->label(false) ?>

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

    <?= $form->field($model, 'service_dateapplied')->widget(DateTimePicker::classname(), [
        'readonly' => false,
        'options' => ['placeholder' => 'Date Applied'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd hh:ii:ss',
        ]
    ]); ?>

    <?= $form->field($model, 'service_status')->dropDownList([
                'Pending' => 'Pending', 'Ongoing' => 'Ongoing', 'Completed' => 'Completed', 'Cancelled' => 'Cancelled'])
                ->label('Visa Application Status')  ?>

    <br>
    <br>
    <br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
