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
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model frontend\models\Services */

?>
<div class="services-view">
  
    <?php 
        $attributes = [
            [
            'group'=>true,
            'label'=>'SECTION 1: Visa Application Information',
            'rowOptions'=>['class'=>'info'],
            //'groupOptions'=>['class'=>'text-center']
            ],

            ['attribute' => 'service_id', 'label' => 'Trasaction Code'],/*
            ['attribute' => 'user_id', 'value' => $model->user->username, 'label' => 'Acquired by'],/**/
            ['attribute' => 'slist_id', 'value' => $model->slist->slist_name, 'label' => 'Service Acquired'],
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

<iframe width="100%" id="myFrame" src="./index.php?r=requirements-per-user%2Findex&RequirementsPerUserSearch%5Bservice_id%5D=<?= $model->service_id?>"
    scrolling="no" frameborder="0" onload="sizeFrame('myFrame')">
</iframe>

    <br>
    <br>
    <br>
 <br>
    <br>
    <br> <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

</div>
