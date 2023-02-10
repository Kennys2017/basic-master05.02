<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Address $model */

$this->title = 'Обновить адресс: ' . $model->id;
?>
<div class="address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
