<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));*/ 
                $kategoriAll[]=array();
                $kategori = Kategori::model()->findAll();
                
                foreach ($kategori as $i=>$ii)
                {
                    $kategoriAll[]=array('label'=>$ii['kategori'], 'url'=> array('/kategori/view', 'id'=>$ii['id'])); 
                }
                
               $this->widget('ext.mbmenu.MbMenu',array(
                                'items'=>array(
                                    array(
                                        'label'=>'Home',
                                        'url'=>array('/site/index')
                                    ),
                                    array(
                                        'label'=>'Forum',
                                        'url'=>array('/kategori/index'),
                                        //'items'=>array(array('label'=>'coba1')),//$kategoriAll,
                                    ),
                                    array(
                                        'label'=>'Kelola Kategori',
                                        'url'=>array('/kategori/admin'), 
                                        'visible'=>!Yii::app()->user->isGuest,
                                        //'visible'=>(Yii::app()->user === "ami")
                                    ),
                                    array(
                                        'label'=>'Kelola Thread',
                                        'url'=>array('/thread/admin'), 
                                        'visible'=>!Yii::app()->user->isGuest,
                                        //'visible'=>Yii::app()->user->getLevel()<=2
                                    ),
                                    array(
                                        'label'=>'Kelola Komentar',
                                        'url'=>array('/comment/admin'), 
                                        'visible'=>!Yii::app()->user->isGuest,
                                        //'visible'=>Yii::app()->user->getLevel()<=2
                                    ),
                                    array('label'=>'Kelola Berita',
                                        'url'=>array('/news/admin'), 
                                        'visible'=>!Yii::app()->user->isGuest,
                                        //'visible'=>Yii::app()->user->isAdmin() 
                                    ),
                                    array(
                                        'label'=>'Login',
                                        'url'=>array('/site/login'), 
                                        'visible'=>Yii::app()->user->isGuest
                                    ),
                                    array(
                                        'label'=>'Register',
                                        'url'=>array('/user/create'), 
                                        'visible'=>Yii::app()->user->isGuest
                                    ),
                                    array(
                                        'label'=>'Profile ('.Yii::app()->user->name.')', 
                                        'url'=>array('/user/view','id'=>Yii::app()->user->id),
                                        'visible'=>!Yii::app()->user->isGuest
                                    ),
                                    array(
                                        'label'=>'Logout',
                                        'url'=>array('/site/logout'), 
                                        'visible'=>!Yii::app()->user->isGuest
                                    )
                                ),
                            )
                       );


                ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php //echo Yii::app()->user; 
        echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
