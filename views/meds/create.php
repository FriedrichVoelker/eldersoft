<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Meds */

$this->title = 'Create Meds';
$this->params['breadcrumbs'][] = ['label' => 'Meds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
