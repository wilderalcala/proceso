<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DivisaBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Divisas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Divisa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_divisa',
            'nombre_divisa',

            [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update}',
            ],
        ],
    ]); ?>
</div>
