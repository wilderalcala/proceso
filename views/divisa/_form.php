<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Divisa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_divisa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
