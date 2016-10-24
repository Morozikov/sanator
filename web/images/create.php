<?php
/* @var $this AdminController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Видеогалерея'=> $this->createUrl('/video/admin/index'),
	'Создать видео',
);

$this->pageTitle = 'Создать видео';
?>


<?php $this->renderPartial('_form', compact('model','category')); ?>