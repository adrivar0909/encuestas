<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Encuesta */

$this->title = 'Update Encuesta: ' . $model->idEncuesta;
$this->params['breadcrumbs'][] = ['label' => 'Encuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEncuesta, 'url' => ['view', 'id' => $model->idEncuesta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encuesta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
