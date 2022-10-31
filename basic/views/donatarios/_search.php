<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DonatariosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="donatarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcaddonatario') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpfcnpj') ?>

    <?= $form->field($model, 'telefone') ?>

    <?= $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'senha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
