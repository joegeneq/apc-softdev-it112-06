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


            //'rpu_id',
       
/*        [
            'attribute'=>'service_id', 
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
            'label' => 'Service Acquired',
        ],*/

/*        [
            'attribute'=>'user_id', 
            'width'=>'250px',
             'value'=>function ($model, $key, $index, $widget) { 
                return Html::a($model->user->username,  
                    './index.php?r=user%2Fview&id='.$model->user->id,
                    ['title'=>'View Client detail']
                    );
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
        ],*/

        [
           /* 'attribute'=>'rlist_id', */
            'value'=> 'rlist.rlist_name',
            'label' => 'Requirements Name',
        ],

            ['value' => 'rpu_datefilesubmitted', 'label' => 'Date Submitted',], //date
            ['value' => 'rpu_fileuploaded', 'label' => 'File Uploaded',], //uploaded files, if applicable
            ['value' => 'rpu_status', 'label' => 'Status',],


        [
        'class' => '\kartik\grid\ActionColumn',
        'viewOptions' => ['hidden' => true],
        'deleteOptions' => ['hidden' => true],
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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-folder-open"></i>&nbsp&nbsp Requirements Per User</h3>',
            'type'=>GridView::TYPE_PRIMARY,
        ],

    ]); 

    ?>

</div>
