<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblTechnician */

$this->title = 'เพิ่มข้อมูลช่าง';
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลช่าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-technician-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
