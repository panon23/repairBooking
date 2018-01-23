<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'Plat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Plong')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Img')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'FacebookLogin')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'Status')->textInput() ?>

<!--     <?= $form->field($model, 'Create_Date')->textInput() ?>

    <?= $form->field($model, 'Update_Date')->textInput() ?>
 -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
