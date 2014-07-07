<?php
/* @var $this ThreadstarController */
/* @var $data Threadstar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('is')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->is), array('view', 'id'=>$data->is)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thread_id')); ?>:</b>
	<?php echo CHtml::encode($data->thread_id); ?>
	<br />


</div>