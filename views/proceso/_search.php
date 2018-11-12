<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProcesoBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proceso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_proceso') ?>

    <?= $form->field($model, 'num_proceso') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha_creacion') ?>

    <?= $form->field($model, 'id_sede') ?>

    <?php // echo $form->field($model, 'presupuesto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
