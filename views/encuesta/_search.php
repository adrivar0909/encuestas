<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncuestaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encuesta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEncuesta') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?= $form->field($model, 'limiteEncuestados') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'idCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
