<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Username',
            'Password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
