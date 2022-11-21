<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Donatarios $model */
/** @var yii\widgets\ActiveForm $form */
?>
<section class="vh-100" style="background-color: #eee;">
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cadastrar-se no Doa+</p>
              <form class="mx-1 mx-md-4">


<div class="donatarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
    <?= $form->field($model, 'nome')->textInput(['maxlength, placeholder="Nome completo"' => true]) ?>
    </div>
    </div>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <h6 class="mb-2 pb-1">Pessoa: </h6>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Fisica"
    value="option1" checked />
  <label class="form-check-label" for="Fisica">Fisica</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Jurudica"
    value="option2" />
  <label class="form-check-label" for="Juridica">Juridica</label>
</div>
    <?= $form->field($model, 'cpfcnpj')->textInput(['maxlength, placeholder="xxx.xxx.xxx-xx"' => true]) ?>
    </div>
    </div>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
    <?= $form->field($model, 'telefone')->textInput(['maxlength, placeholder="(xx)xxxxx-xxxx"' => true]) ?>
    </div>
    </div>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
    <?= $form->field($model, 'endereco')->textInput(['maxlength, placeholder="Avenida Paulista, 316, apartamento 13"' => true]) ?>
    </div>
    </div>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
    <?= $form->field($model, 'email')->textInput(['maxlength, placeholder="exemplo@gmail.com"' => true]) ?>
    </div>
    </div>

    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
    <?=$form->field($model, 'senha')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
 
    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </form>
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
