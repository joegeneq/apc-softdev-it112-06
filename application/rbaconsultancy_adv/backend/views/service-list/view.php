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
/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */

$this->title = $model->slist_name;
$this->params['breadcrumbs'][] = ['label' => 'Service List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicelist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->slist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->slist_id], [
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
        'label'=>'SECTION 1: Service Information',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
        ],

        'slist_id',
        ['attribute' => 'slist_name', 'label' => 'Service'],
        ['attribute' => 'slist_desc', 'label' => 'Description'],
        ['attribute' => 'slist_type', 'label' => 'Type'],
        ['attribute' => 'slist_dateadded', 'label' => 'Date Added', 'type'=>DetailView::INPUT_DATE], 
        
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
/*
    echo ListView::widget( [
        'dataProvider' => $dataProvider,
        'itemView' => '_requirements_items',
    ] );*/
?>

<iframe width="100%" id="myFrame" src="./index.php?r=requirements-list%2Findex&RequirementsListSearch%5Bslist_id%5D=<?= $model->slist_id?>"
    scrolling="no" frameborder="0" onload="sizeFrame('myFrame')">
</iframe>

</div>
