<?php
/* @var $this RaputationController */
/* @var $model Raputation */

$this->breadcrumbs=array(
	'Raputations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Raputation', 'url'=>array('index')),
	array('label'=>'Create Raputation', 'url'=>array('create')),
	array('label'=>'View Raputation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Raputation', 'url'=>array('admin')),
);
?>

<h1>Update Raputation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>