 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\UserMain */
/* @var $form yii\widgets\ActiveForm */

?>       
            
            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                  <?php
                    echo "<li class=\"active\"><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Fmy-visa\">My Visa Application</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
                  ?>                   
                </ul>
              </div>
   </div>
</div>   

            <link rel="stylesheet" type="text/css" href="css/sidebar.css" />
            <script src="js/sidebar.js"></script>

      <div class="about">
      <div class="wrap">
         <div class="top-head">
            <h3>My Account</h3>
            <ul>
               <li><a href="index.php">Home / </a></li>
               <li><a href="./index.php?r=site%2Fmy-account"><span>My Account</span></a></li>
            </ul>
         </div>

         <br>

      
          <div class="user-main-form">

			<?php $form = ActiveForm::begin(); ?>

					<?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

					<?= $form->field($model, 'email')->textInput(['placeholder'=>'name@email.com', 'maxlength' => 255]) ?>

				   <!--  <?= $form->field($model, 'status')->textInput() ?> -->

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
						 'options' => ['placeholder' => 'Select Birth Date ...'],
						 // modify template for custom rendering
						//'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'dd-M-yyyy'
						]
					]);?>

					<?= $form->field($model, 'user_age')->textInput() ?>

				
			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>


         <br>
      </div>
      </div>

 
