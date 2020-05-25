<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Update_skill';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            
        </div>

        <div style="background-color: white; margin-top: 150px" class="col-md-4">
            
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>

      
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rate')->dropDownList([
                '1'=>'1',
                '2'=>'2',
                '3'=>'3',
                '4'=>'4',
                '5'=>'5',
            ]) ?>
          
            <div class="form-group">
                <?= Html::submitButton('save', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
       
   
</div>
        </div>
        
        <div class="col-md-4">
            
        </div>
        
    </div>
</div>
