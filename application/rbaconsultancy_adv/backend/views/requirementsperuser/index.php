<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\RequirementsList;
use common\models\UserMain;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequirementsPerUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requirements Per Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-user-index">

    <?php 

    $gridColumns = [
        [
            'class'=>'kartik\grid\SerialColumn',
            'contentOptions'=>['class'=>'kartik-sheet-style'],
            'header'=>'',
            'headerOptions'=>['class'=>'kartik-sheet-style']
        ],

        [
            'attribute'=>'user_id', 
            'width'=>'250px',
             'value'=>function ($model, $key, $index, $widget) { 
                return Html::a($model->user->username,  
                    '#', 
                    ['title'=>'View author detail', 'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")']);
            },
            'vAlign'=>'middle',
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(UserMain::find()->orderBy('username')->asArray()->all(), 'id', 'username'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                ],
            'filterInputOptions'=>['placeholder'=>'Select Client'],
            'format'=>'raw',
            'label' => 'Acquired by',
        ],

       [
            'attribute'=>'service_id', 
            'width'=>'250px',
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

        [
            'attribute'=>'rlist_id', 
            'width'=>'250px',
             'value'=>function ($model, $key, $index, $widget) { 
                return Html::a($model->requirementslist->rlist_name,  
                    '#', 
                    ['title'=>'View author detail', 'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")']);
            },
            'vAlign'=>'middle',
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(RequirementsList::find()->orderBy('rlist_name')->asArray()->all(), 'rlist_id', 'rlist_name'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                ],
            'filterInputOptions'=>['placeholder'=>'Select Requirements'],
            'format'=>'raw',
        ],

            'rpu_datefilesubmitted', //date
            'rpu_fileuploaded', //uploaded files, if applicable
            'rpu_status',


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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-folder-open"></i>&nbsp&nbsp Requirements Per User</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::tag('p', '*This is auto-generated when a client applied for Visa.'),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        ],

    ]); 

    ?>

</div>
