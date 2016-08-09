<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'name_short',
            'name_rod',
            'ldap_name',
            'raion',
            'parent',
            'forma',
            'type',
            'ogrn',
            'aindex',
            'adres',
            'inn',
            'kpp',
            'rschet',
            'lschet',
            'descr',
            'bank',
            'tel_code',
            'tel',
            'fax',
            'email1:email',
            'email2:email',
            'deleted',
            'status',
            'ege_code',
            'f1p1_2',
            'date_obr',
            'date_lic',
            'archiver',
            'site_addr',
            'ppe',
            'uchred:ntext',
            'lic_num',
            'lic_end',
            'akkr_num',
            'akkr_date',
            'akkr_end',
            'name_dat',
            'add_prikaz',
            'add_prikaz_date',
            'add_type',
            'add_date_prov',
            'add_yur_addr',
            'add_date_egrul',
        ],
    ]) ?>

</div>
