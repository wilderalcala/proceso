<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Proceso */
/* @var $form yii\widgets\ActiveForm */

     Modal::begin([
                'id' => 'mensajeError',
                'header' => '<h4 style="color:red;">Error</h4>',      
                'closeButton' => [

                  'label' => 'Cerrar',

                  'class' => 'btn btn-danger btn-sm pull-right',

                ],
                'size' => 'modal-lg',
            ]);
     echo 'El valor del presupuesto no puede ser menor que 0.';
     Modal::end();
     
?>

<div class="proceso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_proceso')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['maxlength' => 200]) ?>

    <?= $form->field($model, 'id_sede')->dropDownList(ArrayHelper::map(\app\models\Sede::find()->orderBy('nombre_sede')->all(), 'id_sede', 'nombre_sede'), ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'presupuesto')->textInput(['min'=>0]) ?>
    
    <div class="form-group">
     <?php echo Html::button('Mostrar en dolares', ['id'=>'btn_mostrardolarr','class' => 'btn btn-primary']); ?>
    </div>
    
    <div class="form-group">
     <?php echo Html::input('text', 'input_mostrardolar','', ['id'=>'input_mostrardolar', 'class' => 'form-control','disabled' => true]); ?>
    </div>
    
    <div class="form-group">
       
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJsFile(
        '@web/js/JsHelper.js', ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
        '@web/js/jquery.number.js', ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
        '@web/js/area/proceso.js', ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>
   
