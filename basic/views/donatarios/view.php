<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Donatarios $model */

$this->title = $model->idcaddonatario;
$this->params['breadcrumbs'][] = ['label' => 'Donatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="donatarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idcaddonatario' => $model->idcaddonatario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idcaddonatario' => $model->idcaddonatario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcaddonatario',
            'nome',
            'cpfcnpj',
            'telefone',
            'endereco',
            'email:email',
            'senha',
        ],
    ]) ?>

</div>
