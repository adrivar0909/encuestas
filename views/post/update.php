<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\empresa */

$this->title = 'Update Empresa: ' . $model->nit;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nit, 'url' => ['view', 'id' => $model->nit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
