<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
$user = \common\models\User::findOne(Yii::$app->user->id);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >-->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style type="text/css">
    .site-logo{
        font-size: 36px;
        color: white;
        font-weight: 600;
    }
    .site-logo:hover{
        color: #db3a34;
    }
    #nav-wrap ul{
        list-style: none;
        position: relative;
        display: flex;
        margin: 0;
        padding: 0;
    }
    #nav-wrap ul a{
        display: block;
        text-decoration: none;
        color: #fff;
        padding: 0 15px;
    }
    #nav-wrap ul li{
        positon: relative;
        display: flex;
        margin: 0;
        padding: 8px 0;
    }
    #nav-wrap ul li:hover{
        border-bottom: 2px solid #ddd;
        animation: animate 1s infinite;
    }
    @keyframes animate {

        50%  {border-color:#3a86ff; left:200px; top:200px;}
    }
    .form-control{
        width: 200px;
        margin-left: 10px;
    }

    #nav-wrap ul ul{
        display:none;
        position: absolute;
        top: 100%;
        left: 1;
        background: #333;
    }
    #nav-wrap ul ul li{
        width: 200px;
    }
    #nav-wrap ul ul a{
        color: #f6f6f6;
        transition: background 0.7s linear;
    }
    .col-right{
        border-right: 2px solid #fff;
    }
    #nav-wrap ul li:hover>ul{
        display: block;
    }
</style>
<body >
<?php $this->beginBody() ?>


<div >

    <!-- Navbar -->
    <nav class=" navbar navbar-dark bg-primary">
        <div class="container">
            <!-- logo -->

            <?php if ($user->rule == 'User'){?>
                <a href="<?=\yii\helpers\Url::to(["site/index"], true)?>" class="navbar-brand "><span  style="font-size: 24px; font-weight: 600;">Подача </span></a>
            <?php }?>
            <?php if ($user->rule == 'Admin'){?>
                <a href="<?=\yii\helpers\Url::to(["site/index"], true)?>" class="navbar-brand "><span class="site-logo" style="font-size: 24px">Админ</span></a>
            <?php }?>
            <!-- end logo -->
            <!-- nav-wrap -->
            <div id="nav-wrap">
                <ul class="">
                    <?php if ($user->rule == 'User'){?>
                        <li><a href="<?=\yii\helpers\Url::to(["site/index"], true)?>" class=""  style="font-size: 18px"><i class="fa fa-home"></i> Главная</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(["../product"], true)?>" class=""  style="font-size: 18px"><i class="fa fa-cogs"></i>товаров</a>
                    <?php }?>
                    <li><a href="<?=\yii\helpers\Url::to(["/site/logout"], true)?>" class=""  style="font-size: 18px"><i class="fas fa-sign-out-alt"></i> выход</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
