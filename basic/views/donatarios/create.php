<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Donatarios $model */

$this->title = 'Create Donatarios';
$this->params['breadcrumbs'][] = ['label' => 'Donatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donatarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
