<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Favourites $model */

$this->title = 'Добавить избранное';
?>
<div class="favourites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
