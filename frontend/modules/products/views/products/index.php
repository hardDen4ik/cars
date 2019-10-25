<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\products\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            //'descr:ntext',
            'price',
            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function ($model)
                {
                    return "<img src='$model->photo'/>";
                }
            ],
            //'weight',
            ['attribute' => 'category.name'],
            [
                'attribute' => 'status',
                'value' => function (\common\models\Products $products) {
                    return \common\models\Order::getStatusText()[$products->status];
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
