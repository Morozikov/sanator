<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TopP */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="top-p-form">

    <?php
    $catalog = \app\models\Catalog::find()->all();
    $items = \yii\helpers\ArrayHelper::map($catalog,'id','name');
    $params = [
        'promt'=> 'Выберите каталог',
    ]
    ?>

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'netto')->textInput(['maxlength' => true]) ?>

    <img src="<?= $model->image ?>">

    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model,'id_catalog')->dropDownList($items,$params) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
