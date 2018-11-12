<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sede */

$this->title = $model->id_sede;
$this->params['breadcrumbs'][] = ['label' => 'Sedes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sede-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_sede], ['class' => 'btn btn-primary']) ?>
    
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sede',
            'nombre_sede',
        ],
    ]) ?>

</div>
