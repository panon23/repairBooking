<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblBooking */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลการจองช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-booking-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="box box-warning">
        <div class="box-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'ID',
                'Cus_id',
                'Technic_id',
                'Date',
                'Status',
                'Creare_Date',
                'Update_Date',
                'User_id',
            ],
        ]) ?>
        </div>
    </div>    

</div>
