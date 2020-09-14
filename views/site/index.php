<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


    <div class="container">
        <div style="background-color: white;" class="row">
            <div class="col-md-4">
                 <h4>Profil | <a href="<?=Yii::$app->UrlManager->createUrl(['/site/update'])?>">edit</a></h4>

                <div class="table-responsive text-nowrap">
                <table class="table table-striped ">

                  <thead class="thed"> 
                    <tr>
                      <th>username</th>
                      <th><?=$profile->username?></th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                        <td>Familiya</td>
                        <td><?=$profile->last_name?></td>
                    </tr>
               
                    <tr>
                        <td>Ism</td>
                        <td><?=$profile->first_name?></td>
                    </tr>
               
                    <tr>
                        <td>Otasining ismi</td>
                        <td><?=$profile->middle_name?></td>
                    </tr>
               
                    <tr>
                        <td>e-mail</td>
                        <td><?=$profile->email?></td>
                    </tr>

                    <tr>
                        <td>Obyektivkasi</td>
                        <td>   <a href="../img/<?=$profile->name_file?>" download><i class="fa fa-download" aria-hidden="true"><p>kochirib olish</p></i></a> </td>
<!--                        <td> --><?//=Yii::getAlias('@webroot') . '../img/'.$profile->name_file?><!--</td>-->
                    </tr>




                   
                    </tbody>

                </table>
            </div>
          </div>
            <div class="col-md-8">
                <h4>Tab</h4>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Education</a></li>
                                    <li><a href="#two" data-toggle="tab">Skill</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="one">
                                       <div class="table-responsive text-nowrap">
  
        <table class="table table-striped">

       
          <thead class="thed"> 
                <tr>
                  <th>T/R</th>
                  <th>Universited nomi</th>
                  <th>Location</th>
                  <th>Qabul vaqti</th>
                  <th>Tamomlagan vaqti</th>
                  <th>
                    <a style="color: white" href="<?=Url::to(['education/create']);?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add</a>
                  </th>
                  
                 
                </tr>
            </thead>
         
          <tbody>
             <? foreach ($profile->education as $key => $value) {?>       
            <tr>
                  <th scope="row"><?=$key+1?></th>
                  <td><?=$value->university?></td>
                  <td><?=$value->location?></td>
                  <td><?=$value->from_date?></td>
                  <td><?=$value->to_date?></td>
                  <td>
                    <a href="<?=Url::to(['education/update','id'=>$value->id]);?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="<?=Url::to(['education/delete','id'=>$value->id]);?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    
                  </td>
                  
                 
            </tr>
              <?}?>
          </tbody>
        </table>

      </div>
     
                                    </div>
                                    <div class="tab-pane" id="two">
                                        <div class="table-responsive text-nowrap">
  
        <table class="table table-striped">

       
          <thead class="thed"> 
                <tr>
                  <th>T/R</th>
                  <th>Nomi</th>
                  <th>Baho</th>
                  <th>
                     <a style="color: white" href="<?=Url::to(['site/skill-create']);?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add</a>
                  </th>
                  
                 
                </tr>
            </thead>
         
          <tbody>
             <? foreach ($profile->skill as $key => $value) {?>       
            <tr>
                  <th scope="row"><?=$key+1?></th>
                  <td><?=$value->name?></td>
                  <td><?=$value->rate?></td>
                  <td>
                    <a href="<?=Url::to(['site/skill-update','id'=>$value->id]);?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="<?=Url::to(['site/skill-delete','id'=>$value->id]);?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>
                  
                 

            </tr>
              <?}?>
          </tbody>
        </table>
<!--                                            --><?php
//                                            $homepage = file_get_contents('http://www.mtrk.uz/');
//                                            echo $homepage;
//                                            ?>
      </div>
                                    </div>
                                    
            </div>
        </div>
    </div>


 <style type="text/css">
        .tugma{
          text-align: center;
        }
      </style>
       <style type="text/css">
        .thed{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;            
            padding: 8px;
            border-spacing: 2px;         
           }
         thead tr th {
          border: 1px solid #ddd !important;
          text-align: center;
        }
         tbody tr th {
          border: 1px solid #ddd !important;
          text-align: center;
        }
         tbody tr td {
          border: 1px solid #ddd !important;
          text-align: center;
        }

      </style>