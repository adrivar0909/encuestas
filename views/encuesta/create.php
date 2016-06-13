<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Encuesta */

$this->title = 'Create Encuesta';
$this->params['breadcrumbs'][] = ['label' => 'Encuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
