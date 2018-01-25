<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBooking */

$this->title = 'แก้ไขข้อมูลการจองช่าง: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'จัดกาข้อมูลการจองช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="tbl-booking-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
