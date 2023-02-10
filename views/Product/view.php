<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить товар?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_category',
            'id_company',
            'name',
            [
                    'attribute'=> 'image',
                    'value'=> 'image/Products'.$model->image,
                    'format'=>['image', ['width'=>100, 'height'=>100, 'alt']],
            ],
            'discount',
            'description:ntext',
            'characteristic:ntext',
            'mode_of_application:ntext',
            'link',
            'rating',
            'created_at',
            'updated_at',
            'price',
            'isDiscount',
        ],
    ]) ?>

</div>
