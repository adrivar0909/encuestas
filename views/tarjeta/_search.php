<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TarjetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarjeta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTarjeta') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'fechaVen') ?>

    <?= $form->field($model, 'cvv') ?>

    <?php // echo $form->field($model, 'idCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
