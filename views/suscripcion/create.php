<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suscripcion */

$this->title = 'Create Suscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Suscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
