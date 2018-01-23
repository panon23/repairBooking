<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblAdmin */

$this->title = 'Update Tbl Admin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
