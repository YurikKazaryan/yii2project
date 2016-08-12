<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'org',
            'name',
            'nik',
            'pas',
            // 'count',
            // 'data_reg',
            // 'icon',
            // 'email:email',
            // 'ip_addr',
            // 'theme',
            // 'last_log',
            // 'active',
            // 'field_set',
            // 'config',
            // 'type',
            // 'addon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
