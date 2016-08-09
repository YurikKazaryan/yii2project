<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'name_short',
            'name_rod',
            'ldap_name',
            // 'raion',
            // 'parent',
            // 'forma',
            // 'type',
            // 'ogrn',
            // 'aindex',
            // 'adres',
            // 'inn',
            // 'kpp',
            // 'rschet',
            // 'lschet',
            // 'descr',
            // 'bank',
            // 'tel_code',
            // 'tel',
            // 'fax',
            // 'email1:email',
            // 'email2:email',
            // 'deleted',
            // 'status',
            // 'ege_code',
            // 'f1p1_2',
            // 'date_obr',
            // 'date_lic',
            // 'archiver',
            // 'site_addr',
            // 'ppe',
            // 'uchred:ntext',
            // 'lic_num',
            // 'lic_end',
            // 'akkr_num',
            // 'akkr_date',
            // 'akkr_end',
            // 'name_dat',
            // 'add_prikaz',
            // 'add_prikaz_date',
            // 'add_type',
            // 'add_date_prov',
            // 'add_yur_addr',
            // 'add_date_egrul',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
