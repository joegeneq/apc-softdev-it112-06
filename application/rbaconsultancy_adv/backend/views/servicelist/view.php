<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'slist_id',
			['attribute' => 'slist_name', 'label' => 'Service'],
			['attribute' => 'slist_desc', 'label' => 'Description'],
			['attribute' => 'slist_type', 'label' => 'Type'],
            ['attribute' => 'slist_dateadded', 'label' => 'Date Added'], 
        ],
    ]) ?>

</div>
