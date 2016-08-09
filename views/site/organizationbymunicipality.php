<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.08.2016
 * Time: 15:25
 */
use yii\helpers\Html;
use app\models\OrganizationType;

$this->title = Html::encode($municipality['name']);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-8">
    <h2><?=Html::encode($municipality['name']);?></h2>
    <pre>
    <p><?= print_r($model);?></p>
    </pre>
    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
</div>
<div class="col-md-2">
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