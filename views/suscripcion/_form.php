<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suscripcion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suscripcion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'privilegios')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'mensual' => 'Mensual', 'anual' => 'Anual', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
