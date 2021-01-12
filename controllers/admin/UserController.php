<?php

namespace app\controllers\admin;
use app\controllers\AppController;



class UserController extends AppController
{
 public function actionIndex(){
     $hi = "Hello Admin";
     return $this->render('index', compact('hi'));
 }
}