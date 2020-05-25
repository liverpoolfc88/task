<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Educations';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">

	<div style="background-color: white; padding: 10px" class="row">


<div class="education-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Education', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'university',
            'location',
            'from_date',
            'to_date',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

		
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