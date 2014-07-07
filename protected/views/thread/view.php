<?php
/* @var $this ThreadController */
/* @var $model thread */

$this->breadcrumbs=array(
	'Threads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List thread', 'url'=>array('index')),
	array('label'=>'Create thread', 'url'=>array('create')),
	array('label'=>'Update thread', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete thread', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage thread', 'url'=>array('admin')),
);
?>

<h1>View thread #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'judul',
		'isi',
		'user_id',
		'kategori_id',
		'tanggalPost',
	),
)); ?>
