<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicelistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicelist-index">

    <?php 

    $gridColumns = [
        [
            'class'=>'kartik\grid\SerialColumn',
            'contentOptions'=>['class'=>'kartik-sheet-style'],
            'header'=>'',
            'headerOptions'=>['class'=>'kartik-sheet-style']
        ],

            //'slist_id',
            ['attribute' => 'slist_name', 'label' => 'Service'],
            ['attribute' => 'slist_desc', 'label' => 'Description'],
            ['attribute' => 'slist_type', 'label' => 'Type'],
            ['attribute' => 'slist_dateadded', 'label' => 'Date Added'], 


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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>&nbsp&nbsp List of Available Services</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Service', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        ],

    ]); 

    ?>

</div>
