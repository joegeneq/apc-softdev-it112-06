<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\ServiceList;


/* @var $this yii\web\View */
/* @var $searchModel common\models\RequirementsListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requirements List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-index">

    <?php 

    $gridColumns = [
        [
            'class'=>'kartik\grid\SerialColumn',
            'contentOptions'=>['class'=>'kartik-sheet-style'],
            'header'=>'',
            'headerOptions'=>['class'=>'kartik-sheet-style']
        ],

/*        [
            'attribute'=>'slist_id', 
            'width'=>'250px',
             'value'=>function ($model, $key, $index, $widget) { 
                return Html::a($model->slist->slist_name,  
                    './index.php?r=servicelist%2Fview&id='.$model->slist->slist_id, 
                    ['title'=>'View Service detail']);
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
        ],*/

        ['label' => 'Requirement Name', 'value' => 'rlist_name', 'width'=>'250px',],
        ['label' => 'Requirement Description', 'value' => 'rlist_desc'],
        ['label' => 'Date Added', 'value' => 'rlist_dateadded'],


        [
        'class' => '\kartik\grid\ActionColumn',
        'viewOptions' => ['hidden' => true]
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
        'floatHeader'=>false,
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i>&nbsp&nbsp Requirements List</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Requirements', ['create'], ['class' => 'btn btn-success']),
           /* 'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),*/
        ],

    ]); 

    ?>

</div>
