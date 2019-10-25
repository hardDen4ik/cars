<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = 'Товар';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
            'descr:ntext',
            'price',
            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function ($model)
                {
                    return "<img src='$model->photo'/>";
                }
            ],
            'weight',
            [
                'attribute' => 'category.name',
            ],
            [
                'attribute' => 'status',
                'value' => function (\common\models\Products $order) {
                    return \common\models\Products::getStatusText()[$order->status];
                }
            ],
        ],
    ]) ?>

</div>
