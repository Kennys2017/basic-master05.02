<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Busket $model */

$this->title = 'Update Busket: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Корзина', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="busket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
