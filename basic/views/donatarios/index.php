<?php

use app\models\Donatarios;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DonatariosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Donatarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donatarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Donatarios', ['create'], ['class' => 'btn btn-primary btn-lg']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcaddonatario',
            'nome',
            'cpfcnpj',
            'telefone',
            'endereco',
            //'email:email',
            //'senha',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Donatarios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idcaddonatario' => $model->idcaddonatario]);
                 }
            ],
        ],
    ]); ?>


</div>
