<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PricelistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-index">

    <?php 

    $gridColumns = [
        [
            'class'=>'kartik\grid\SerialColumn',
            'contentOptions'=>['class'=>'kartik-sheet-style'],
            'header'=>'',
            'headerOptions'=>['class'=>'kartik-sheet-style']
        ],

           // 'plist_id',

            [
                'attribute'=>'slist_id', 
            /*    'value'=>'slist.slist_name',
    */           'width'=>'250px',
                 'value'=>function ($model, $key, $index, $widget) { 
                    return Html::a($model->slist->slist_name,  
                        '#', 
                        ['title'=>'View author detail', 'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")']);
                },
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
           ['label' => 'Price Name', 'attribute' => 'plist_name'],
           ['label' => 'Cost of Service', 'attribute' => 'plist_price'],
           ['label' => 'Date Added', 'attribute' => 'plist_dateadded'],

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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-piggy-bank"></i>&nbsp&nbsp Price List</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add Price for a Service', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        ],

    ]); 

    ?>

</div>
