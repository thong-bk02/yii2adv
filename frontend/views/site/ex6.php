<?php
use yii\helpers\Url;
use yii\bootstrap4\Html;
$name= Yii::$app->params['name'];

echo '<h1>Chào:'.$name.'</h1>';
?>
<div>
    <b>Danh sánh link tại siteController</b><br>
    <p>Stt|Tên trang|Đường dẫn</p>
    <p>1 | Trang chủ |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/index']) ?></p>
    <p>2 | Trang Liên Hệ |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/contact']) ?></p>
    <p>3 | Trang about |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/about']) ?></p>
    <p>4 | Trang login |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/login']) ?></p>
    <p>5 | Trang signup |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/signup']) ?></p>
    <p>6 | Trang welcome |<?= Html::a('https://frontend.yii2adv.com/site/index', ['/site/welcome']) ?></p>
</div>
