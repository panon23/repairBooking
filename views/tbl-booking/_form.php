<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TblTechnician;
use yii\helpers\ArrayHelper;
use app\models\TblCustomer;


/* @var $this yii\web\View */
/* @var $model app\models\TblBooking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'ID')->textInput() ?> -->
    <?php 
    $customer=TblCustomer::find()->all();
    $listData=ArrayHelper::map($customer,'ID','Name');
    ?>
    <?= $form->field($model, 'Cus_id')->dropDownList($listData,['prompt'=>'select...']); ?>
    <?php 
    $technician=TblTechnician::find()->all();
    $listData=ArrayHelper::map($technician,'ID','Name');
    ?>
    <?= $form->field($model, 'Technic_id')->dropDownList($listData,['prompt'=>'select...']); ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput() ?>

    <!-- <?= $form->field($model, 'Creare_Date')->textInput() ?>

    <?= $form->field($model, 'Update_Date')->textInput() ?> -->

    <?= $form->field($model, 'User_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
