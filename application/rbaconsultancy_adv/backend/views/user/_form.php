<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\UserMain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-main-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>
   
    <?= $form->field($model, 'auth_key')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'password_hash')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'password_reset_token')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['placeholder'=>'name@email.com', 'maxlength' => 255]) ?>

   <!--  <?= $form->field($model, 'status')->textInput() ?> -->

    <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'user_lastname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_firstname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_midname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_mobile')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_telephone')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_housenum')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_street')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_city')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_country')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_postalcode')->textInput() ?>

    <?= $form->field($model, 'user_birthdate')->widget(DateTimePicker::classname(), [
        /*'readonly' => true,*/
        'options' => ['placeholder' => 'Date Added ...'],
        'pluginOptions' => [
            'autoclose' => true,
            
            'format' => 'mm/dd/yyyy hh:ii:ss',
        ]
    ]); ?>

    <?= $form->field($model, 'user_gender')->dropDownList(
        ['Female' => 'Female',
         'Male' => 'Male'],
         ['prompt'=>'Select Gender...']
        ); ?>

    <?= $form->field($model, 'user_companyname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_companyadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_companycontact')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_age')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'user_type')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
