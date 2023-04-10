<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Личный кабинет';
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <img height='50px' src='../avatar.png' alt="Аватар пользователя">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'id_role',
            'login',
            'password',
            'email:email',
        ],
    ]) ?>

</div>
