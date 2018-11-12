<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DivisaconversionBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisaconversion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_divisa_conversion') ?>

    <?= $form->field($model, 'id_divisa1') ?>

    <?= $form->field($model, 'valor_divisa1') ?>

    <?= $form->field($model, 'id_divisa2') ?>

    <?= $form->field($model, 'valor_divisa2') ?>

    <?php // echo $form->field($model, 'id_operador_aritmetico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
