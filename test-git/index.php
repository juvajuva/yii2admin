<?php
namespace frontend\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        phpinfo();
        return $this->render('index');
    }

    public function actionView()
    {
        //d
        //e
        //f
        return $this->render('index');
    }
}
