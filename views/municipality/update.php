<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Municipality */

$this->title = 'Update Municipality: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Municipalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="municipality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
