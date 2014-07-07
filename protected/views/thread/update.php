<?php
/* @var $this ThreadController */
/* @var $model thread */

$this->breadcrumbs=array(
	'Threads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List thread', 'url'=>array('index')),
	array('label'=>'Create thread', 'url'=>array('create')),
	array('label'=>'View thread', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage thread', 'url'=>array('admin')),
);
?>

<h1>Update thread <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>