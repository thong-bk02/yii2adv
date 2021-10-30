<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
$cdnUrl = Yii::$app->params['frontend'];
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="<?= $cdnUrl ?>/css/layout.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div class="row">
        <div class="col-md-2 d-md-block">
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                        <div class="media-body">
                            <h4 class="m-0">Minh</h4>
                            <p class="font-weight-light text-muted mb-0">Web developer</p>
                        </div>
                </div>

                <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <?= Html::a('Home', ['/site/index'], ['class' => 'nav-link text-dark font-italic bg-light']) ?>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic">
                            <?= Html::a('Contact', ['/site/contact'], ['class' => 'nav-link text-dark font-italic']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('About', ['/site/about'], ['class' => 'nav-link text-dark font-italic']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Login', ['/site/login'], ['class' => 'nav-link text-dark font-italic']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Signup', ['/site/signup'], ['class' => 'nav-link text-dark font-italic']) ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
