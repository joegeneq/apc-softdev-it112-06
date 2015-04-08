<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Services1 */

$this->title = 'Update Services1: ' . ' ' . $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Services1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_id, 'url' => ['view', 'id' => $model->service_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
