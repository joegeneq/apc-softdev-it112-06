<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

use common\models\ServiceList;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="services-index">


    <?php 

    $gridColumns = [
        [
            'class'=>'kartik\grid\SerialColumn',
            'contentOptions'=>['class'=>'kartik-sheet-style'],
            'header'=>'',
            'headerOptions'=>['class'=>'kartik-sheet-style']
        ],

            ['label' => 'Transaction Code', 'attribute' => 'service_id'],

        
        [
            'attribute'=>'slist_id', 
            'width'=>'250px',
            'value'=> 'slist.slist_name',  
            'vAlign'=>'middle',
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(ServiceList::find()->orderBy('slist_name')->asArray()->all(), 'slist_id', 'slist_name'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                ],
            'filterInputOptions'=>['placeholder'=>'Select Service'],
            'format'=>'raw',
            'label' => 'Service',
        ],

            ['label' => 'Date Applied', 'attribute' => 'service_dateapplied'],
            ['label' => 'Visa Application Status', 'attribute' => 'service_status'],


         [
        'class' => '\kartik\grid\ActionColumn',
        'updateOptions' => ['hidden' => true],
        'deleteOptions' => ['hidden' => true]
        ],
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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon glyphicon-plane"></i>&nbsp&nbsp My Visa Applications</h3>',
            'type'=>GridView::TYPE_PRIMARY,
        ],

    ]); 

    ?>

</div>
