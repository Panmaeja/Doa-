<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Donatarios $model */

$this->title = 'Update Donatarios: ' . $model->idcaddonatario;
$this->params['breadcrumbs'][] = ['label' => 'Donatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcaddonatario, 'url' => ['view', 'idcaddonatario' => $model->idcaddonatario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donatarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
