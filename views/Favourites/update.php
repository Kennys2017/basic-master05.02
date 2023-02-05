<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Favourites $model */

$this->title = 'Обновить избранное : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Избранное', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить избранное';
?>
<div class="favourites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
