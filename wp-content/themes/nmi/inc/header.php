<!doctype html>
<head>
	<meta charset="utf-8">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo $dir?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $dir?>css/fonts/fonts.css">
	<link rel="stylesheet" href="<?php echo $dir?>css/prettyPhoto.css">
	<link rel="stylesheet" href="<?php echo $dir?>css/style.css">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo $dir?>css/ie.css" />
	<![endif]-->
	<script src="<?php echo $dir?>js/modernizr.js"></script>
	<?php /*
		Google analytics!!
	*/?>
</head>

<?php $industryClass = explode('+', $industry); /* cheating */ ?>
<body class="<?php echo $industryClass[0].' '.$level1?>">
	<div class="container" id="wrapper">
		<div class="row">
			<div class="span3"><a id="logo" href="/">NMI Industrial</a></div>
				<div class="span4 offset5" id="utility_links">
			<?php if($level1 !== 'home') :?>
					<a href="/">NMI Industrial</a> | 
			<?php endif; ?>
					<a id="clink" data-toggle="modal" data-target="#careerModal" href="#careers">Careers</a> | 
					<a id="clink" data-toggle="modal" data-target="#contactModal" href="#contact">Contact</a>
				</div>
		</div>

