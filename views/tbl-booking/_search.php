<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Cus_id') ?>

    <?= $form->field($model, 'Technic_id') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Creare_Date') ?>

    <?php // echo $form->field($model, 'Update_Date') ?>

    <?php // echo $form->field($model, 'User_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
