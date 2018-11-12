<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divisaconversion */

$this->title = 'Update Divisaconversion: ' . $model->id_divisa_conversion;
$this->params['breadcrumbs'][] = ['label' => 'Divisaconversions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_divisa_conversion, 'url' => ['view', 'id' => $model->id_divisa_conversion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divisaconversion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
