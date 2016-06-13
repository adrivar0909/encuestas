<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suscripcion */

$this->title = 'Update Suscripcion: ' . $model->idSuscripcion;
$this->params['breadcrumbs'][] = ['label' => 'Suscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSuscripcion, 'url' => ['view', 'id' => $model->idSuscripcion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suscripcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
