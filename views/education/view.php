<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Education */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div  style="background-color: white; padding: 15px" class="col-md-6">

    <div class="education-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'university',
            'location',
            'from_date',
            'to_date',
            'user_id',
        ],
    ]) ?>

</div>
    

</div>
<div class="col-md-3"></div>



</div>
</div>




<style type="text/css">
  thead  tr {
        background-color: #4CAF50   
    }
    thead {
        color: white
    }
    thead tr a {
        color: white
    }
</style>