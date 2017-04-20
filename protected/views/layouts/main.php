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
        <div id="profilemenu">
            <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                            array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/setting.png" height=17px/>', 'url'=>array('/settings/index'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/logout.png" height=17px/>', 'url'=>array('/site/logout'),  'visible'=>!Yii::app()->user->isGuest),
                        ),
                        'encodeLabel'=>false,
                )); ?>
        </div>
	<!-- profile menu -->
        <br/>
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                //array('label'=>'Branch', 'url'=>array('/branch/index', )),
                                array('label'=>'Party', 'url'=>array('/party/index')),
                                array('label'=>'Jobs', 'url'=>array('/job/index', )),
                                array('label'=>'Trips', 'url'=>array('/trip/index',)),
                                array('label'=>'Expenses', 'url'=>array('/voucher/index', )),
                                array('label'=>'Income', 'url'=>array('/invoice/index', )),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Miracle!', 'url'=>array('miracle/index')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
//                                array('label'=>'Settings', 'url'=>array('/settings/index'))
			),
		)); ?>
	</div><!-- main menu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by .vinoe.zelur.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
