<?php
/* @var $this RaputationController */
/* @var $model Raputation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemberi_id'); ?>
		<?php echo $form->textField($model,'pemberi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penerima_id'); ?>
		<?php echo $form->textField($model,'penerima_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->