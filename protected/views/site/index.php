<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
$data = array();
foreach ($news as $news) {
    $link = CHtml::link($news->judul, array('news/view', 'id' => $news->id));
    $foto = Yii::app()->request->baseUrl . '/images/news/' . $news->foto;
    $data;
    $data[] = array($foto, $link);
}

$this->widget('application.extensions.s3slider.S3Slider', array(
                    'images' => $data,
                    'width' => '590',
                    'height' => '375',
                )
);
?>