<?php
//Подключаем виджеты форм и хелпер для отображения html разметки(кнопки)
use yii\helpers\Html;
use yii\widgets\ActiveForm;

// AJAX обработка формы, без перезагрузки страницы, но с перезагрузкой формы
//use yii\widgets\Pjax;
?>

<h1>Страница Блога</h1>
<?= $GET ?>

<?php
// Pjax::begin([
//     // Pjax options
// ]);
//Вызов виджета ActiveForm. Метод бегин можно оставить без аргументов, тут мы присваиваем форме id и class="form-horizontal"
$form = ActiveForm::begin([
    'id' => 'test-form',
    'options' => ['class' => 'form-horizontal'],
    //'options' => ['data' => ['pjax' => true]],
]) ?>
    <!-- Передаем в форму атрибуты модели из её свойств -->
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'text')->textarea() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end();
// Pjax::end();
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif ?>