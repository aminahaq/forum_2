<?php
/* @var $this ThreadstarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Threadstars',
);

$this->menu=array(
	array('label'=>'Create Threadstar', 'url'=>array('create')),
	array('label'=>'Manage Threadstar', 'url'=>array('admin')),
);
?>

<h1>Threadstars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
