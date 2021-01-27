<?php


namespace restapi\controllers;


use yii\rest\ActiveController;
use yii\web\Response;
use yii\filters\auth\HttpBasicAuth;

class MyController extends ActiveController
{

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['formats'] = [
            'class'=>'yii\filters\ContentNegotiator',
            'formats'=>[
                'application/json'=>Response::FORMAT_JSON,
            ]
        ];
        $behaviors['corsFilter'] = ['class' => \yii\filters\Cors::className()];
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
        ];
        return $behaviors;
    }
}