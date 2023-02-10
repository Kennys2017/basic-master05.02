<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Company $model */

$this->title = 'Update Company: ' . $model->name;
?>
<div class="company-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
