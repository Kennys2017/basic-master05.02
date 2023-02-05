<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Favourites $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="favourites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_product')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
