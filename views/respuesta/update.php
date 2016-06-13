<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Respuesta */

$this->title = 'Update Respuesta: ' . $model->idRespuesta;
$this->params['breadcrumbs'][] = ['label' => 'Respuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRespuesta, 'url' => ['view', 'id' => $model->idRespuesta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="respuesta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
