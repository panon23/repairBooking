<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblCustomer */

$this->title = 'แก้ไขข้อมูลลูกค้า: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลลูกค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="tbl-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
