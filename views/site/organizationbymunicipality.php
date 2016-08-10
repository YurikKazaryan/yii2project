<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.08.2016
 * Time: 15:25
 */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($municipality['name']);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-7">
    <span class="title"><?=Html::encode($municipality['name']);?></span>
    <?php
    foreach ($model as $organizationType)
    {
        echo Html::tag('p',Html::encode($organizationType['name']));
        echo Html::beginTag('ol');
        foreach ($organizationType['organizations'] as $organization)
        {
            echo Html::tag('li',Html::a(
                $organization['name'],
                Url::to(['organization/view', 'id' => $organization['id']])
            ));
        }
        echo Html::endTag('ol');
    }
    ?>
    <?= Html::a('Создать организацию', ['organization/create'], ['class' => 'btn btn-success']) ?>
</div>
<div class="col-md-2 organizations">
    <h2>Heading</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur.</p>

    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
</div>
</div>

</div>
</div>