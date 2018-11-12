<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divisa */

$this->title = 'Update Divisa: ' . $model->id_divisa;
$this->params['breadcrumbs'][] = ['label' => 'Divisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_divisa, 'url' => ['view', 'id' => $model->id_divisa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divisa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
