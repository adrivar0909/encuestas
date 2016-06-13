<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tarjeta */

$this->title = 'Create Tarjeta';
$this->params['breadcrumbs'][] = ['label' => 'Tarjetas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarjeta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
