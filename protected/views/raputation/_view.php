<?php
/* @var $this RaputationController */
/* @var $data Raputation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemberi_id')); ?>:</b>
	<?php echo CHtml::encode($data->pemberi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penerima_id')); ?>:</b>
	<?php echo CHtml::encode($data->penerima_id); ?>
	<br />


</div>