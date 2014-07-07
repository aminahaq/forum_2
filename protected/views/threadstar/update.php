<?php
/* @var $this ThreadstarController */
/* @var $model Threadstar */

$this->breadcrumbs=array(
	'Threadstars'=>array('index'),
	$model->is=>array('view','id'=>$model->is),
	'Update',
);

$this->menu=array(
	array('label'=>'List Threadstar', 'url'=>array('index')),
	array('label'=>'Create Threadstar', 'url'=>array('create')),
	array('label'=>'View Threadstar', 'url'=>array('view', 'id'=>$model->is)),
	array('label'=>'Manage Threadstar', 'url'=>array('admin')),
);
?>

<h1>Update Threadstar <?php echo $model->is; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>