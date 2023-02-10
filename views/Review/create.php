<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Review $model */

$this->title = 'Добавить обзор ';
?>
<div class="review-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
