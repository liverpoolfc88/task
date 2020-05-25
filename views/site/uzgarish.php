
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
use app\models\Kategoriya;
?>


<?php $g=ActiveForm::begin();?>

<?=$g->field($model,'nomi');?>

<?=Html::submitButton('ok');?>


<? ActiveForm::end(); ?>



