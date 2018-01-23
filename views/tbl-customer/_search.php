<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Address') ?>

    <?= $form->field($model, 'Plat') ?>

    <?= $form->field($model, 'Plong') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Tel') ?>

    <?php // echo $form->field($model, 'Img') ?>

    <?php // echo $form->field($model, 'FacebookLogin') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Create_Date') ?>

    <?php // echo $form->field($model, 'Update_Date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
