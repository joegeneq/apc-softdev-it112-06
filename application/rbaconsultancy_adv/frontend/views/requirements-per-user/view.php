<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\RequirementsPerUser;
use common\models\RequirementsPerUserSearch;


/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */

$this->title = $model->rpu_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-user-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rpu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rpu_id], [
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
            ['attribute' => 'rpu_id', 'label' => 'Requirement Number'],
            ['attribute' => 'service_id', 'label' => 'Service Acquired'],
            ['attribute' => 'user.username', 'label' => 'Acquired By'],
            ['attribute' => 'rlist.rlist_name', 'label' => 'Requirement'],
            ['attribute' => 'rpu_datefilesubmitted', 'label' => 'Date Submitted'],
            ['attribute' => 'rpu_fileuploaded', 'label' => 'File Uploaded'],
            ['attribute' => 'rpu_status', 'label' => 'Status'],
        ],
    ]) ?>
    <?= Html::a('View Uploaded File','../../backend/web/uploads/'.$model->user->username.'/'.$model->rpu_fileuploaded) ?>
</div>
