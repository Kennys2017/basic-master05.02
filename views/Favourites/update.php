<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Favourites $model */

$this->title = 'Обновить избранное : ' . $model->id;
?>
<div class="favourites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
