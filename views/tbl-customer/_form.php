<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'Plat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Plong')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tel')->textInput(['maxlength' => true]) ?>

   <div class="row">
      <div class="col-md-2">
        <div class="well text-center">
          <?= Html::img($model->getPhotoViewer(),['style'=>'width:100px;','class'=>'img-rounded']); ?>
        </div>
      </div>
      <div class="col-md-10">

    <?= $form->field($model, 'Img')->fileInput() ?>
     </div>
    </div>

<!--     <?= $form->field($model, 'FacebookLogin')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'Status')->textInput() ?>

<!--     <?= $form->field($model, 'Create_Date')->textInput() ?>

    <?= $form->field($model, 'Update_Date')->textInput() ?>
 -->
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
