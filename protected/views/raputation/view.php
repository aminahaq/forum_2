<?php
/* @var $this RaputationController */
/* @var $model Raputation */

$this->breadcrumbs=array(
	'Raputations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Raputation', 'url'=>array('index')),
	array('label'=>'Create Raputation', 'url'=>array('create')),
	array('label'=>'Update Raputation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Raputation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Raputation', 'url'=>array('admin')),
);
?>

<h1>View Raputation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal',
		'jenis',
		'pemberi_id',
		'penerima_id',
	),
)); ?>
