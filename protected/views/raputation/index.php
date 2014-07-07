<?php
/* @var $this RaputationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Raputations',
);

$this->menu=array(
	array('label'=>'Create Raputation', 'url'=>array('create')),
	array('label'=>'Manage Raputation', 'url'=>array('admin')),
);
?>

<h1>Raputations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
