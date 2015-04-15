<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="services-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   

   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
      
            ['label' => 'Acquired by', 'attribute' => 'user_id',  'value' => 'user.username'],
            ['label' => 'Service Acquired', 'attribute' => 'slist_id',  'value' => 'slist.slist_name'],
            ['label' => 'Date Applied', 'attribute' => 'service_dateapplied'],
            ['label' => 'Visa Application Status', 'attribute' => 'service_status'],
           
        ],
    ]); ?>

</div>
