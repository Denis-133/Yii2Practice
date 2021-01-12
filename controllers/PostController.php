<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest(){
        $names = ['Иванов','Петров','Сидоров'];
        //$this->myDebug(Yii::$app);
        return $this->render('Test', ['names' => $names]);
    }
}