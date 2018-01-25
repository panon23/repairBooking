<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTechnician */

$this->title = 'แก้ไขข้อมูลช่าง: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="tbl-technician-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
