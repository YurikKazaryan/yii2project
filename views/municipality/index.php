<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MunicipalitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Municipalities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipality-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Municipality', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent',
            'descr',
            'name',
            'name_short',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
