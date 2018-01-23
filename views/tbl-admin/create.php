<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblAdmin */

$this->title = 'Create Tbl Admin';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
