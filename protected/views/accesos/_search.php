<?php
/* @var $this AccesosController */
/* @var $model Accesos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idacceso'); ?>
		<?php echo $form->textField($model,'idacceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomacceso'); ?>
		<?php echo $form->textField($model,'nomacceso',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->