<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserMain */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'id', 'label' => 'User ID'],
            ['attribute' => 'username', 'label' => 'Username'],
            ['attribute' => 'email', 'label' => 'Email Address'],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            ['attribute' => 'status', 'label' => 'Status'],
            ['attribute' => 'created_at', 'label' => 'Date Account Created'],
            ['attribute' => 'updated_at', 'label' => 'Date Last Updated'],
            ['attribute' => 'user_firstname','label' => 'First Name'],
            ['attribute' => 'user_lastname','label' => 'Last Name'],
            ['attribute' => 'user_midname','label' => 'Middle Name'],
            ['attribute' => 'user_mobile','label' => 'Mobile'],
            ['attribute' => 'user_telephone','label' => 'Telephone'],
            ['attribute' => 'user_housenum','label' => 'House No.'],
            ['attribute' => 'user_street','label' => 'Street'],
            ['attribute' => 'user_city','label' => 'City'],
            ['attribute' => 'user_country','label' => 'Country'],
            ['attribute' => 'user_postalcode','label' => 'Zip Code'],
            ['attribute' => 'user_gender','label' => 'Gender'],
            ['attribute' => 'user_companyname','label' => 'Company Name'],
            ['attribute' => 'user_companyadd','label' => 'Company Address'],
            ['attribute' => 'user_companycontact','label' => 'Company Contact No.'],
            ['attribute' => 'user_birthdate','label' => 'Birth Date'],
            ['attribute' => 'user_age','label' => 'Age'],
            //['attribute' => 'user_type','label' => 'Type'],
        ],
    ]) ?>

</div>
