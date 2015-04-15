<script type="text/javascript">
<!--//
function sizeFrame(frameId) {

var F = document.getElementById(frameId);
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
} else {



F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome

}

}

// window.onload=sizeFrame; 

//-->
</script>

<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use common\models\UserMain;
/* @var $this yii\web\View */
/* @var $model backend\models\Services */

$this->title = $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Visa Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->service_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->service_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php 
        $attributes = [
            [
            'group'=>true,
            'label'=>'SECTION 1: Visa Application Information',
            'rowOptions'=>['class'=>'info'],
            //'groupOptions'=>['class'=>'text-center']
            ],

            ['attribute' => 'service_id', 'label' => 'Trasaction Code'],
            ['attribute' => 'user_id', 'value' => $model->user->username, 'label' => 'Acquired by'],/*
            ['attribute' => 'slist.slist_name', 'label' => 'Service Acquired'],*/
            ['attribute' => 'service_dateapplied', 'label' => 'Date Applied'],
            ['attribute' => 'service_status', 'label' => 'Status'],

            [
                'group'=>true,
                'label'=>'SECTION 2: Requirements',
                'rowOptions'=>['class'=>'info'],
                //'groupOptions'=>['class'=>'text-center']
            ],
        ]
    ?>
    
    <?php
        echo DetailView::widget([
        'model'=>$model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'panel'=>false,
        'attributes'=> $attributes,
        ]);
    ?>


<iframe width="100%" id="myFrame" src="./index.php?r=requirementsperuser%2Findex&RequirementsPerUserSearch%5Bservice_id%5D=<?= $model->service_id?>"
    scrolling="no" frameborder="0" onload="sizeFrame('myFrame')">
</iframe>

</div>
