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

    public function attributeLabels()
    {
        return [
            'name'=>'Введите Ваше имя',
            'email'=>'Введите Вашу почту',
            'text'=>'Введите Ваше сообщение',
        ];
    }

    public function rules()
    {
        return[
            [['name','email','text'],'required'],
            ['email','email'],
            // ['name','string','min'=>5],
            // ['text','string','max'=>255]
            ['name','string','length'=>[2,20]],
            ['text','string','length'=>[20,255]],
            [['name', 'email'], 'trim'],
            /*Почему то не работает trim на поле email ???*/
            // ['name','nameValidate']
        ];
    }
    /*Этот Валидатор не сработает на клиенте, но сработает на сервере, форма не будет отправлена просто*/
    // public function nameValidate($attribute)
    // {
    //     if (!in_array($this->$attribute, ['Hello', 'World'])) {
    //         $this->addError($attribute, 'Имя должно быть либо "Hello", либо "World"');
    //     }
    // }
}
