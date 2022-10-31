<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\cadastroForm $model */

?>
<div class="cadastro">

    <?php $form = ActiveForm::begin([]); ?>

        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'cpf/cnpj') ?>
        <?= $form->field($model, 'telefone') ?>
        <?= $form->field($model, 'endereco') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'senha') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- formCadastro -->
