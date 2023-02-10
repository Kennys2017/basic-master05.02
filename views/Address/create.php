<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Address $model */

$this->title = 'Добавить адресс';
?>
<div class="address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
