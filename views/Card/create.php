<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Card $model */

$this->title = 'Добавить карту';
?>
<div class="card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
