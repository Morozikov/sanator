<?php
/* @var $this AdminController */
/* @var $model Photo */
/* @var $form CActiveForm */
$options = array('class'=>'form-control');
$categories = VideoCategory::model()->findAll();
?>

<div class="col-lg-7">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'photo-form',
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'created_at'); ?>
        <?php echo $form->textField($model,'created_at', array('disabled' => true)  + $options); ?>
        <?php echo $form->error($model,'created_at'); ?>
    </div>

    <!-- translated field -->
    <?php $widget = $this->beginWidget('SBLanguageFields', array('fields' => array('title'))); ?>
    <?php foreach($widget->fieldSet as $code => $fields): ?>
        <div class="tab-pane fade <?php if ($code == $widget->defaultLanguage): ?>active in<?php endif; ?>"
             id="<?= $widget->id . "-" . $code ?>">
            <div class="form-group">
                <?php echo $form->labelEx($model,'title'); ?>
                <?php echo $form->textArea($model,$fields['title'],array('maxlength'=>500,'class'=>'form-control','placeholder'=>'до 500 символов')); ?>
            </div>
        </div>
    <?php endforeach; ?>
    <?php $this->endWidget(); ?>
    <!-- end translated fields -->

    <div class="form-group">
        <?php echo $form->labelEx($model,'category_id'); ?>
        <?php echo $form->dropDownList($model,'category_id', CHtml::listData($categories,'id','name'),$options); ?>
        <?php echo $form->error($model,'category_id'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'video'); ?>
        <?php echo $form->fileField($model, 'video'); ?>
    </div>
    
    <div class="buttons">
        <?php echo CHtml::submitButton(Yii::t('admin','Сохранить'), array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>

<div class="col-lg-5">
    <h4>Альбомы:</h4>
    <?php if (count($categories) > 0): ?>

        <table class="table table-striped">
            <thead>
            <tr><th >Наименование</th><th style="width: 40px">Действия</th></tr>
            </thead>
            <?php foreach($categories as $cat): ?>
                <tr>
                    <td><span><?= $cat->name; ?></span></td>
                    <td style="text-align: center">
                        <a href="<?= $this->createUrl('/video/admin/updateCategory', array('id'=>$cat->id)); ?>"><i class="fa fa-pencil"></i></a>
                        <a class="delete" href="<?= $this->createUrl('/video/admin/deleteCategory', array('id'=>$cat->id)); ?>"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Альбомов пока нет</p>
    <?php endif; ?>
    <h4>Создать альбом:</h4>
    <div class="well">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'photo-form',
            'enableAjaxValidation'=>false,
        ));
        $fieldSet = Yii::app()->l->fieldList('name');
        ?>
        <?php echo $form->errorSummary($category); ?>
        <?php foreach($fieldSet as $code => $fields): ?>
            <p class="<?= $code; ?> small" style="margin-bottom: 5px"><?= Yii::app()->l->languageName($code); ?></p>
            <div class="form-group small">
                <?= $form->labelEx($category, 'name'); ?>
                <?= $form->textField($category, $fields['name'], $options); ?>
            </div>
        <?php endforeach; ?>

        <?= CHtml::submitButton('Сохранить', array('class'=> 'btn btn-primary')); ?>
        <?php $this->endWidget(); ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            var link = $(this).attr('href');
            var li = $(this).parent();
            if (confirm('Действительно удалить?')){
                $.ajax({
                    url: link,
                    type: 'post',
                    success: function(data){
                        //success
                        li.remove();
                    },
                    error: function(data){
                        alert(data);
                    }
                });
            }

            return false;
        });
    });
</script>



