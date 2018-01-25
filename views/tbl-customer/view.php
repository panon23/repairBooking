<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblCustomer */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลลูกค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-view">

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
                'Name',
                'Address',
                'Plat',
                'Plong',
                'Email:email',
                'Tel',
                'Img',
                'FacebookLogin',
                'Status',
                'Create_Date',
                'Update_Date',
            [
                'format'=>'raw',
                'attribute'=>'Img',
                'value'=>Html::img($model->photoViewer,['class'=>'img-thumbnail','style'=>'width:200px;'])
            ]
            ],
        ]) ?>
        </div>
    </div>    

</div>
