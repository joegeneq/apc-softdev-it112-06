<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Services1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Services1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'service_id',
            'user_id',
            'slist_id',
            'service_dateapplied',
            'service_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
