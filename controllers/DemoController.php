<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\DemoXml;

class DemoController extends Controller
{
    public function actionXml()
    {
        $demoXml = new DemoXml();
        $demoXml->generateXml();
        Yii::$app->response->format = Response::FORMAT_RAW;
        Yii::$app->response->headers->add('Content-Type', 'text/xml');
        return $this->renderPartial('xml');
    }
}