<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProcesoBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proceso';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proceso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Proceso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_proceso',
            'num_proceso',
            'descripcion',
            [
            'attribute' => 'fecha_creacion',
            'value' => 'fecha_creacion',

            'filter' => \yii\jui\DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute'=>'fecha_creacion',
                    'language' => 'es',
                    'dateFormat' => 'yyyy-MM-dd',
                ]),
            'format' => 'html',
            ],

            [
            'attribute' => 'id_sede',
              'value' => function ($d) {               
                return $d->getSede();          
            },
            'filter' => ArrayHelper::map(\app\models\Sede::find()->orderBy('nombre_sede')->all(), 'id_sede', 'nombre_sede'),
             ],
        //'id_sede',
            'presupuesto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
