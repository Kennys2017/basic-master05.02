<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Role $model */

$this->title = 'Create Role';
?>
<div class="role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
