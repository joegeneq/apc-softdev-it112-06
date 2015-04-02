<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-index">

    <?php 

    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],

                'username',
                'email:email',
                'user_firstname',
                'user_lastname',
                'created_at',
                'user_type',
                //'id',
                //'auth_key',
                // 'password_hash',
                //'password_reset_token',
                // 'status',
                // 'updated_at',
                // 'user_midname',
                // 'user_housenum',
                // 'user_street',
                // 'user_city',
                // 'user_country',
                // 'user_postalcode',
                // 'user_gender',
                // 'user_companyname',
                // 'user_companyadd',
                // 'user_companycontact',
                // 'user_birthdate',
                // 'user_age',

                ['class' => 'kartik\grid\ActionColumn'],
            ];

    echo GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive'=>true,
        'hover'=>true,

        'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax' => true, 
        'floatHeader'=>true,
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp&nbsp Users</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New User', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        ],

    ]); 

    ?>

</div>
