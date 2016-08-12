<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'org') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'pas') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'data_reg') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'ip_addr') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <?php // echo $form->field($model, 'last_log') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'field_set') ?>

    <?php // echo $form->field($model, 'config') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'addon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
