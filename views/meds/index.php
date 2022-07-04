<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\models\LoginForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedsSearch */
/* @var $model app\models\Meds */
/* @var $model2 app\models\LoginForm */
$Login = new app\models\LoginForm;
$user = new app\models\Meds;
$this->title = 'Meds';
$this->params['breadcrumbs'][] = $this->title;



?>
<div class="meds-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $dataProvider = new ActiveDataProvider([
        'query' => \app\models\Meds::find()
            ->where(['created_by' => Yii::$app->user->identity->id]),
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);
    echo \yii\grid\GridView::widget([

        'dataProvider' => $dataProvider,
        'columns' => [
            'titel',
            'dosis',
            'further_informations:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]) ?>


</div>
