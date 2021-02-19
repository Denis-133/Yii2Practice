<?php

namespace app\controllers;

use Yii;
//Подключим нашу модель для работы с формой
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';
    //Изменение шаблона страниц для всех отображений контроллера

    //Фильтр, применяющийся к коду страницы до выполнения и рендеринга каких либо действий
    public function beforeAction($action){
        if($action->id=='index'){
            //Отключение csrf токена проверки формы на определенной страницы, до выполнения инструкций основного метода
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){

        if (Yii::$app->request->isAjax){
            Debug(Yii::$app->request->post());
            return 'test';
        }
        $names = ['Иванов','Петров','Сидоров'];
        //$this->myDebug($names);

        //Создадим объект нашей модели для работы с формой
        $model = new TestForm();
        //Далее данный объект модели нужно передать в вид, через параметры
        return $this->render('test', ['names' => $names, 'model'=>$model]);
        //Можно использовать функцию compact return $this->render('test', compact('names', 'model'));
        //Тут вывожу с какого то херу шаблон test.php из view
    }

    public function actionShow()
    {
        //Изменение шаблона страницы только для отображения show
        //UPD: post/index -> шаблон main; post/show -> шаблон basic;
        //$this->layout = 'basic';
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевые слова']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание страницы']);
        return $this->render('show');
    }

}