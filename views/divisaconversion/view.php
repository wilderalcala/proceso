<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Divisaconversion */

$this->title = $model->id_divisa_conversion;
$this->params['breadcrumbs'][] = ['label' => 'Divisaconversions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisaconversion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_divisa_conversion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_divisa_conversion], [
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
        ],
    ]) ?>

</div>
