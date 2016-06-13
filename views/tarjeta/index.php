<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarjetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarjetas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarjeta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarjeta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idTarjeta',
            'marca',
            'numero',
            'fechaVen',
            'cvv',
            // 'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
