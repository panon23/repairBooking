<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จัดการข้อมูลลูกค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="box box-warning">
      <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                 // ['class' => 'yii\grid\SerialColumn'],
                [
                'options'=>['style'=>'width:150px;'],
                'format'=>'raw',
                'attribute'=>'Img',
                'value'=>function($model){
                  return Html::tag('div','',[
                    'style'=>'width:150px;height:95px;
                              border-top: 10px solid rgba(255, 255, 255, .46);
                              background-image:url('.$model->photoViewer.');
                              background-size: cover;
                              background-position:center center;
                              background-repeat:no-repeat;
                              ']);
                         }
                ],

                //'ID',
                'Name',
                'Address',
                // 'Plat',
                // 'Plong',
                'Email:email',
                'Tel',
                //'Img',
                //'FacebookLogin',
                'Status',
                //'Create_Date',
                //'Update_Date',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
      </div>
    </div>  
