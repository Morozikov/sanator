<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Recept */

$this->title = Yii::t('app', 'Create Recept');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Recepts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recept-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
