<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DivisaconversionBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Conversion de divisa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisaconversion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Conversion divisa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_divisa_conversion',
            [
            'attribute' => 'id_divisa1',
            'value' => function ($d) {               
            return $d->getDivisa1();          
            }
            ],
            'valor_divisa1',
            [
            'attribute' => 'id_divisa2',
            'value' => function ($d) {               
            return $d->getDivisa2();          
            }
            ],
            'valor_divisa2',
            [
            'attribute' => 'id_operador_aritmetico',
            'value' => function ($d) {               
            return $d->getOperadorAritmetico();          
            }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
