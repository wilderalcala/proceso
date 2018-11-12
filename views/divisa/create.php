<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Divisa */

$this->title = 'Crear Divisa';
$this->params['breadcrumbs'][] = ['label' => 'Divisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
