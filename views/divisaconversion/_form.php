<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Divisaconversion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisaconversion-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id_divisa1')->dropDownList(ArrayHelper::map(\app\models\Divisa::find()->orderBy('nombre_divisa')->all(), 'id_divisa', 'nombre_divisa'), ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'valor_divisa1')->textInput() ?>
    
    <?= $form->field($model, 'id_divisa2')->dropDownList(ArrayHelper::map(\app\models\Divisa::find()->orderBy('nombre_divisa')->all(), 'id_divisa', 'nombre_divisa'), ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'valor_divisa2')->textInput() ?>
  
    <?= $form->field($model, 'id_operador_aritmetico')->dropDownList(ArrayHelper::map(\app\models\OperadorAritmetico::find()->all(), 'id_operador_aritmetico', 'operador'), ['prompt' => 'Seleccione Uno']); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
