<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblBookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จัดการข้อมูลการจองช่าง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Cus_id',
            'Technic_id',
            'Date',
            'Status',
            //'Creare_Date',
            //'Update_Date',
            //'User_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
