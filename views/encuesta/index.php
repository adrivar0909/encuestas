<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncuestaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encuestas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Encuesta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEncuesta',
            'fechaCreacion',
            'limiteEncuestados',
            'titulo',
            'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
