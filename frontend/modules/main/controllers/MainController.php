<?php

namespace app\modules\main\controllers;

class MainController extends \yii\web\Controller
{

    public function actionIndex()
    {

        return $this->render('index');
    }

}
