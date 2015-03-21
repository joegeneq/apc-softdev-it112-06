<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\UserMain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-main-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

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

    <?= $form->field($model, 'user_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'user_companyname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_companyadd')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_companycontact')->textInput(['maxlength' => 45]) ?>

	<?= $form->field($model, 'user_birthdate')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
	]);?>

    <?= $form->field($model, 'user_age')->textInput() ?>

    <?= $form->field($model, 'user_type')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
