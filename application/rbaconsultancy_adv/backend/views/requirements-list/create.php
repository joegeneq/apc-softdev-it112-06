<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */

$this->title = 'Add Requirement';
$this->params['breadcrumbs'][] = ['label' => 'Requirements List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-create">

    <h2><?= Html::encode($this->title) ?></h2>

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
