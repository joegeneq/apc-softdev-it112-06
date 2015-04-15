<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Services */

?>
<div class="services-view">

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'service_id',
            'user_id',
            'slist_id',
            'service_dateapplied',
            'service_status',
        ],
    ]) ?>

</div>
