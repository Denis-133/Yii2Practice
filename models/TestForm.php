<?php

namespace app\models;

//Подключаем наши классы Model и основной класс Yii для работы 
use Yii;
use yii\base\Model;

/**
 * TestForm is the model behind the contact form.
*/

//Расширяем класс Model для работы с формами
class TestForm extends Model
{
    //Три поля по количеству полей в форме
    public $name;
    public $email;
    public $text;

}
