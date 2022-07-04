<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AllergiesSearch */

$this->title = 'Allergiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allergien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Allergien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $dataProvider = new ActiveDataProvider([
        'query' => \app\models\Allergien::find()
            ->where(['created_by' => Yii::$app->user->identity->id]),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    echo \yii\grid\GridView::widget([

        'dataProvider' => $dataProvider,
        'columns' => [
            'titel',
            'symtomps',
            'causes',
            'further_informations:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]) ?>


</div>
