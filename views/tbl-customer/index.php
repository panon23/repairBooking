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

            //'ID',
            'Name',
            'Address',
            // 'Plat',
            // 'Plong',
            'Email:email',
            'Tel',
            'Img',
            //'FacebookLogin',
            'Status',
            //'Create_Date',
            //'Update_Date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
