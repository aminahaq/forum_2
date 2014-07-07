<?php
/* @var $this ThreadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Threads',
);
/*
  $this->menu=array(
  array('label'=>'Create thread', 'url'=>array('create')),
  array('label'=>'Manage thread', 'url'=>array('admin')),
  );
 * 
 */
?>

<!---<h1>Threads</h1>-->
<?php echo CHtml::link('Buat Thread Baru', array('thread/create', 'id' => $id)); ?>
<br/>
<?php
if ($thread !== NULL) {
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'thread-grid',
        'dataProvider' => $thread->search(),
        //'emptyText'=>'Belum ada thread pada kategori ini',
        //'filter'=>$model,
        'columns' => array(
            array(
                'name' => 'Judul',
                'type' => 'raw',
                'value' => 'Chtml::link($data->judul,array(\'thread/view\',\'id\'=>$data->id))',
            ),
            array(
                //'name'=>'kelas_id',
                'header' => 'Rate',
                'type' => 'HTML',
                'value' => '($data->threadstars->nilai)',
                'sortable' => TRUE,
            ),
            array(
                'name' => 'user_id',
                'header' => 'By',
                'type' => 'HTML',
                'value' => '$data->user->username',
            ),
            array(
                //'name' => 'user_id',
                'header' => 'Total Komentar',
                'type' => 'HTML',
                'value' => 'count($data->comments)',
            ),
        ),
    ));
} else {
    ?>
    <p style="text-align: center">Belum ada thread di kategori ini</p>
    <?php
}
?>
