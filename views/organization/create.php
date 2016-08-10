<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Organization */

$this->title = 'Создать организацию';
$this->params['breadcrumbs'][] = ['label' => 'Организации', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-7"
    <div class="organization-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
