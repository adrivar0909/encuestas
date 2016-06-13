<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tarjeta */

$this->title = 'Update Tarjeta: ' . $model->idTarjeta;
$this->params['breadcrumbs'][] = ['label' => 'Tarjetas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTarjeta, 'url' => ['view', 'id' => $model->idTarjeta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarjeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
