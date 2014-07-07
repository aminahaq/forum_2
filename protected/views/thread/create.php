<?php
/* @var $this ThreadController */
/* @var $model thread */

$this->breadcrumbs=array(
	'Threads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List thread', 'url'=>array('index')),
	array('label'=>'Manage thread', 'url'=>array('admin')),
);
?>

<h1>Create thread</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>