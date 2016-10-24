<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hit-form">

    <?php $form = ActiveForm::begin(); ?>

   <?php
   $product = \app\models\TopP::find()->all();
   $items = \yii\helpers\ArrayHelper::map($product,'id','name');
   $params = [
       'promt'=> 'Выберите продукт',
   ]
   ?>

    <?= $form->field($model, 'id_top')->dropDownList($items,$params)  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
