<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblCustomer */

$this->title = 'เพิ่มข้อมูลลูกค้า';
$this->params['breadcrumbs'][] = ['label' => 'จัดการข้อมูลลูกค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
