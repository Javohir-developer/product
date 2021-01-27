<?php


namespace restapi\controllers;
use yii\filters\auth\HttpBasicAuth;
use yii\web\Response;
class ProductController extends MyController
{
    public $modelClass = 'common\models\Product';
}