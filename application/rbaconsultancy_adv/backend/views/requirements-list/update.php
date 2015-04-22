<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */

$this->title = 'Update: ' . ' ' . $model->rlist_name;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rlist_name, 'url' => ['view', 'id' => $model->rlist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requirements-list-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
