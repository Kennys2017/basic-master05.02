<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=> 'multipart/form-data']]); ?>

    <?= $form->field($model, 'id_category')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'id_company')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Company::find()->all(),'id','name'))?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'characteristic')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mode_of_application')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
