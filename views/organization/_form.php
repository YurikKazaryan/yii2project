<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_rod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ldap_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'raion')->textInput() ?>

    <?= $form->field($model, 'parent')->textInput() ?>

    <?= $form->field($model, 'forma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'ogrn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aindex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rschet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lschet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ege_code')->textInput() ?>

    <?= $form->field($model, 'f1p1_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_obr')->textInput() ?>

    <?= $form->field($model, 'date_lic')->textInput() ?>

    <?= $form->field($model, 'archiver')->textInput() ?>

    <?= $form->field($model, 'site_addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ppe')->textInput() ?>

    <?= $form->field($model, 'uchred')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lic_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lic_end')->textInput() ?>

    <?= $form->field($model, 'akkr_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akkr_date')->textInput() ?>

    <?= $form->field($model, 'akkr_end')->textInput() ?>

    <?= $form->field($model, 'name_dat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_prikaz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_prikaz_date')->textInput() ?>

    <?= $form->field($model, 'add_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_date_prov')->textInput() ?>

    <?= $form->field($model, 'add_yur_addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_date_egrul')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
