<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visa Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Visa Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['label' => 'Transaction Code', 'attribute' => 'service_id'],
            ['label' => 'Acquired by', 'attribute' => 'user_id',  'value' => 'user.username'],
            ['label' => 'Service Acquired', 'attribute' => 'slist_id',  'value' => 'slist.slist_name'],
            ['label' => 'Date Applied', 'attribute' => 'service_dateapplied'],
            ['label' => 'Visa Application Status', 'attribute' => 'service_status'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
