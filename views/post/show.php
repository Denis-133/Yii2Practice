<?php 
//$this->title = 'статья'; 
?>
<?php
// Вывести какое либо сообщение в шаблоне на определенной странице
$this->beginBlock('block1'); ?>
<h1>Страница статьи</h1>
<?php $this->endBlock(); ?>
<h1>Show Action</h1>


<button class="btn btn-success" id="myBtn">Click me...</button>
<?php //$this->RegisterJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php $this->registerJS("$('.container').append('<p>Say Hi for me</p>');", \yii\web\View::POS_LOAD); ?>
<?php $this->registerCss('.container{background: #ccc}'); ?>

<?php $script = <<< JS
$('#myBtn').on('click', function (){
    $.ajax({
        url:'index.php?r=post/index',
        data: {test: '123'},
        type:'POST',
        success: function (res){
            console.log(res);
        },
        error: function (){
            alert('Пошел ты нахер Казел!');
        }
    });
});
JS;
?>
<?php $this->registerJS($script, \yii\web\View::POS_LOAD); ?>