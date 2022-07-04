<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Allergien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allergien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'symtomps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'further_informations')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
