<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TopP */

$this->title = Yii::t('app', 'Create Top P');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Top Ps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-p-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
