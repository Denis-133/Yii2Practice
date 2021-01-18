<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public $layout = 'basic';
    //Изменение шаблона страниц для всех отображений контроллера

    public function actionIndex(){

        if (Yii::$app->request->isAjax){
            debug($_GET);
            return 'test';
        }
        $kazel = 'kazel';
        $names = ['Иванов','Петров','Сидоров'];
        //$this->myDebug($names);
        return $this->render('test', ['names' => $names, 'kazel']);
        //Тут вывожу с какого то херу шаблон test.php из view
    }

    public function actionShow()
    {
        //Изменение шаблона страницы только для отображения show
        //UPD: post/index -> шаблон main; post/show -> шаблон basic;
        //$this->layout = 'basic';
        return $this->render('show');
    }

}