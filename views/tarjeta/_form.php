<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tarjeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarjeta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTarjeta')->textInput() ?>

    <?= $form->field($model, 'marca')->dropDownList([ 'Visa' => 'Visa', 'Mastercard' => 'Mastercard', 'American Express' => 'American Express', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaVen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cvv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
