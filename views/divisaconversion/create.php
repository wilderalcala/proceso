<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Divisaconversion */

$this->title = 'Create Divisaconversion';
$this->params['breadcrumbs'][] = ['label' => 'Divisaconversions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisaconversion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
