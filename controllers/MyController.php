<?php


namespace app\controllers;

class MyController extends AppController
{

    public function actionIndex($id = null){
        if(!$id){
            $id = "test";
        }
        $Admin = $this->Admin;
        $hi = "Hello Yii2";
        $names = ['Иванов','Петров','Сидоров'];
        //return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id','Admin'));

    }

}