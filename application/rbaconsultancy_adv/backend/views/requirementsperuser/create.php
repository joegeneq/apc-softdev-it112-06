<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */

$this->title = 'Create Requirements Per User';
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-user-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
