<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'service_id', 'label' => 'Trasaction Code'],
            ['attribute' => 'user.username', 'label' => 'Acquired by'],
            ['attribute' => 'slist.slist_name', 'label' => 'Service Acquired'],
            ['attribute' => 'service_dateapplied', 'label' => 'Date Applied'],
            ['attribute' => 'service_status', 'label' => 'Status'],
        ],
    ]) ?>

</div>
