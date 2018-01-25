<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblBooking */

$this->title = 'เพิ่มข้อมูลการจองช่าง';
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลการจองช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tbl-booking-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
