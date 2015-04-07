<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */

$this->title = $model->rlist_name;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rlist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rlist_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'rlist_id', 'label' => 'Requirement Number'],
            ['attribute' => 'rlist_name', 'label' => 'Requirement'],
            ['attribute' => 'slist.slist_name', 'label' => 'Service'],
            ['attribute' => 'rlist_desc', 'label' => 'Description'],
            ['attribute' => 'rlist_dateadded', 'label' => 'Date Added'],
        ],
    ]) ?>

</div>
