<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\basket\models\BasketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Корзины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basket-index">

<!--    <p>-->
<!--        --><?//= Html::a('Create Basket', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'user.username',
            ],
            [
                'attribute' => 'product.title',
            ],

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
