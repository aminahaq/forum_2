<?php
/* @var $this ThreadstarController */
/* @var $model Threadstar */

$this->breadcrumbs=array(
	'Threadstars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Threadstar', 'url'=>array('index')),
	array('label'=>'Manage Threadstar', 'url'=>array('admin')),
);
?>

<h1>Create Threadstar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>