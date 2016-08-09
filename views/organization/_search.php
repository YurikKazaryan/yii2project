<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'name_short') ?>

    <?= $form->field($model, 'name_rod') ?>

    <?= $form->field($model, 'ldap_name') ?>

    <?php // echo $form->field($model, 'raion') ?>

    <?php // echo $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'forma') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'ogrn') ?>

    <?php // echo $form->field($model, 'aindex') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'inn') ?>

    <?php // echo $form->field($model, 'kpp') ?>

    <?php // echo $form->field($model, 'rschet') ?>

    <?php // echo $form->field($model, 'lschet') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'bank') ?>

    <?php // echo $form->field($model, 'tel_code') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email1') ?>

    <?php // echo $form->field($model, 'email2') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'ege_code') ?>

    <?php // echo $form->field($model, 'f1p1_2') ?>

    <?php // echo $form->field($model, 'date_obr') ?>

    <?php // echo $form->field($model, 'date_lic') ?>

    <?php // echo $form->field($model, 'archiver') ?>

    <?php // echo $form->field($model, 'site_addr') ?>

    <?php // echo $form->field($model, 'ppe') ?>

    <?php // echo $form->field($model, 'uchred') ?>

    <?php // echo $form->field($model, 'lic_num') ?>

    <?php // echo $form->field($model, 'lic_end') ?>

    <?php // echo $form->field($model, 'akkr_num') ?>

    <?php // echo $form->field($model, 'akkr_date') ?>

    <?php // echo $form->field($model, 'akkr_end') ?>

    <?php // echo $form->field($model, 'name_dat') ?>

    <?php // echo $form->field($model, 'add_prikaz') ?>

    <?php // echo $form->field($model, 'add_prikaz_date') ?>

    <?php // echo $form->field($model, 'add_type') ?>

    <?php // echo $form->field($model, 'add_date_prov') ?>

    <?php // echo $form->field($model, 'add_yur_addr') ?>

    <?php // echo $form->field($model, 'add_date_egrul') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
