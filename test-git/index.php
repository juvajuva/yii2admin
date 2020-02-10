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
        //a
        //b
        //c
        //d
        //e
        //f
        //g
        //e
        //h
        return $this->render('index');
    }
}
