<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

?>
<div class="user-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
            'user_lastname',
            'user_firstname',
            'user_midname',
            'user_mobile',
            'user_telephone',
            'user_housenum',
            'user_street',
            'user_city',
            'user_country',
            'user_postalcode',
            'user_gender',
            'user_companyname',
            'user_companyadd',
            'user_companycontact',
            'user_birthdate',
            'user_age',
            'user_type',
        ],
    ]) ?>

</div>
