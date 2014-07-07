<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="view">
	<?php echo CHtml::link(CHtml::encode($data->kategori.'('.$data->jumlah.')'), array('thread/index', 'id'=>$data->id)); ?>
	<br />
</div>