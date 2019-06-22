<?php
namespace app\controllers;

use yii\web\Controller;

class MyController extends AppController
{
public function actionIndex($id = null){
    $hi = "Hello world !!!";
    $names = ['Ivanov','Petrov','Sidorov'];
    return $this->render('index', compact('hi','names', 'id'));
}
}
