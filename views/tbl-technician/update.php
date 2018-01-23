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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
