<?php
/* @var $this ThreadstarController */
/* @var $model Threadstar */

$this->breadcrumbs=array(
	'Threadstars'=>array('index'),
	$model->is,
);

$this->menu=array(
	array('label'=>'List Threadstar', 'url'=>array('index')),
	array('label'=>'Create Threadstar', 'url'=>array('create')),
	array('label'=>'Update Threadstar', 'url'=>array('update', 'id'=>$model->is)),
	array('label'=>'Delete Threadstar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->is),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Threadstar', 'url'=>array('admin')),
);
?>

<h1>View Threadstar #<?php echo $model->is; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'is',
		'nilai',
		'user_id',
		'thread_id',
	),
)); ?>
