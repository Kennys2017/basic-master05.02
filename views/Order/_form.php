<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_address')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Address::find()->all(),'id','city')) ?>

    <?= $form->field($model, 'id_card')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Card::find()->all(),'id','number')) ?>

    <?= $form->field($model, 'id_product')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Product::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'id_status')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Status::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
