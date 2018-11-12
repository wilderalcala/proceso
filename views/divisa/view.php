<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Divisa */

$this->title = $model->id_divisa;
$this->params['breadcrumbs'][] = ['label' => 'Divisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_divisa], ['class' => 'btn btn-primary']) ?>
     
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_divisa',
            'nombre_divisa',
        ],
    ]) ?>

</div>
