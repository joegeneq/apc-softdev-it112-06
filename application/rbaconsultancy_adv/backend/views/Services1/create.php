<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Services1 */

$this->title = 'Create Services1';
$this->params['breadcrumbs'][] = ['label' => 'Services1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
