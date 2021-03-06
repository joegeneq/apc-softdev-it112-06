<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicelist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slist_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'slist_name')->textInput(['maxlength' => 255])->label('Service') ?>

    <?= $form->field($model, 'slist_desc')->textarea(['rows' => 6])->label('Description') ?>

    
	<?php echo $form->field($model, 'slist_type')->dropDownList(['Immigrant Visa' => 'Immigrant Visa', 'Non Immigrant Visa' => 'Non Immigrant Visa', 'Special Visa' => 'Special Visa'], ['prompt'=>'Select Visa Type...']); ?>
           
	
    <?= $form->field($model, 'slist_dateadded')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
