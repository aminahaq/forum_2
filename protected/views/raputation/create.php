<?php
/* @var $this RaputationController */
/* @var $model Raputation */

$this->breadcrumbs=array(
	'Raputations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Raputation', 'url'=>array('index')),
	array('label'=>'Manage Raputation', 'url'=>array('admin')),
);
?>

<h1>Create Raputation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>