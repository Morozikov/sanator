<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hit */

$this->title = Yii::t('app', 'Create Hit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
