<?php
/* @var $this KategoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoris',
);

$this->menu=array(
	array('label'=>'Create Kategori', 'url'=>array('create')),
	array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>

<h1>Kategoris</h1>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
 * 
 */

    foreach ($dataProvider->getData() as $i=>$ii)
    {
        ?>
<div class="view">
        <?php echo CHtml::link(CHtml::encode($ii['kategori'].' ('.$ii['jumlah'].')'), array('thread/index', 'id'=>$ii['id'])); ?>
    <br/>
</div>
<?php
    }
?>
