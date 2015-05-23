<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title><?php echo (isset($title)) ? $title : "Manifest Infotech" ?> </title>
		<?php echo link_tag('assets/images/Manifeslogosa.png', 'shortcut icon', 'image/png'); ?>
		<link href="https://plus.google.com/113088163173614486012" rel="publisher" />

		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="application-name" content="Software development company">
		<meta name="keywords" content="software, startup, web application development, web development, web development company, php web development, web design, web design company,  web design services" />
		<meta name="description" content="Manifest Infotech provides services like cloud server, big data, web design, web application, digital marketing, business process, CRM, security" />
		<meta name="author" content="Manifest Infotech Pvt. Ltd.">

		<base href="<?php echo base_url();?>">
		<!-- <?php if(isset($link)){echo '<link rel="canonical" href="'.base_url().$link.'" />'; } ?> -->
		<!-- Including Css Files -->
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"  media="all" />	
		<link rel="stylesheet" type="text/css" href="assets/engine1/style.css" />

		<!-- Including Java Script Files -->
		<script src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
		<script src="assets/js/function.js"></script>
		<script>
			var site_url = '<?php echo site_url();?>';
			var base_url = '<?php echo base_url();?>';
			var current_url = '<?php echo current_url();?>';
		</script>
	</head>
    <body>
	<?php $this->load->view('includes/analyticstracking');?>
		<!--start header-->
		<div class="header">
			<div class="wrap">
				<div class="logo">
					<a href="<?php echo base_url();?>"><img src="assets/images/new-logo.png" title="logo" alt="Manifest Infotech Logo" /></a>
				</div>
				<div class="container">
					<a class="toggleMenu" href="#">
					<div><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div></a>
					<ul id="nav" class="nav container">
						<li class="test"><a href="<?php echo base_url();?>">Home</a></li>
						<li><?php echo anchor('welcome/about', 'About Us'); ?>
							<ul>
								<li><?php echo anchor('welcome/process', 'Process'); ?></li>
								<li><?php echo anchor('welcome/solution', 'Solution'); ?></li>
								<li><?php echo anchor('welcome/experties', 'Experties'); ?></li>
								<li><?php echo anchor('welcome/services', 'Services'); ?></li>
							</ul>
						</li>
						<li><?php echo anchor('welcome/whyus', 'Why Us'); ?>
							<ul>
								<li><?php echo anchor('welcome/whatwedo', 'What we do'); ?></li>
								<li><?php echo anchor('welcome/mission', 'Mission'); ?></li>
								<li><?php echo anchor('welcome/vission', 'Vission'); ?></li>
								<li><?php echo anchor('welcome/offerings', 'Offerings'); ?></li>
							</ul></li>
						<li><?php echo anchor('welcome/technology', 'Technologies'); ?>
							<ul>
								<li><?php echo anchor('welcome/frameworks', 'Frameworks'); ?>
									<ul>
										<li><?php echo anchor('welcome/cakePHP', 'CakePHP'); ?></li>
										<li><?php echo anchor('welcome/codeIgniter', 'CodeIgniter'); ?></li>
										<li><?php echo anchor('welcome/yii', 'Yii'); ?></li>
										<li><?php echo anchor('welcome/zend', 'Zend'); ?></li>
									</ul>
								</li>
								<li><?php echo anchor('welcome/cms', 'CMS'); ?>
									<ul>
										<li><?php echo anchor('welcome/drupal', 'Drupal'); ?></li>
										<li><?php echo anchor('welcome/joomla', 'Joomla'); ?></li>
										<li><?php echo anchor('welcome/wordPress', 'WordPress'); ?></li>
									</ul>
								</li>
								<li><?php echo anchor('welcome/mobileApp', 'Mobile Apps'); ?>
									<ul>
										<li><?php echo anchor('welcome/androidApp', 'Android Application'); ?></li>
										<li><?php echo anchor('welcome/iPad', 'iPad Apps'); ?></li>
										<li><?php echo anchor('welcome/iPhone', 'iPhone Apps'); ?></li>
									</ul>
								</li>
							</ul>
						</li>
						<!-- <li><a href="plans.html">Blogs</a></li> -->
						<li class="hover"><?php echo anchor('welcome/contact', 'Contact'); ?>
							<ul>
								<li><?php echo anchor('welcome/career', 'Career'); ?></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			<!--End header-->