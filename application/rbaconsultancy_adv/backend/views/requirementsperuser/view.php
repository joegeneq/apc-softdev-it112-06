<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\RequirementsList;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */

$this->title = $model->rpu_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            //'rpu_id',
			['attribute' => 'rpu_status', 'label' => 'Requirement Status'],
			['attribute' => 'rpu_datefilesubmitted', 'label' => 'Date File Submitted'],
			['attribute' => 'rpu_fileuploaded', 'label' => 'Requirement File Uploaded'],
            'requirementsList.rlist_name',
            'user_id',
        ],
    ]) ?>

</div>
