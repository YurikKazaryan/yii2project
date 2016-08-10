<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */

$this->title = 'Редактировать организацию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Организации', 'url' => ['site/organizations-by-municipality',
    'id' => $model->raion]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="col-md-7">
    <div class="organization-update">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
