<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblTechnician */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-technician-view">

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
                    'Email:email',
                    'Tel',
                    'Img',
                    'Status',
                    'Create_Date',
                    'Update_Date',
                    'User_id',
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
