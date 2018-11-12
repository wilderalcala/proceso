<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Proceso */

$this->title = $model->id_proceso;
$this->params['breadcrumbs'][] = ['label' => 'Procesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proceso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_proceso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_proceso], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_proceso',
            'num_proceso',
            'descripcion',
            'fecha_creacion',
            [
            'attribute' => 'id_sede',
            'value' => function ($d) {               
            return $d->getSede();          
            }
            ],
           
            'presupuesto',
        ],
    ]) ?>

</div>
