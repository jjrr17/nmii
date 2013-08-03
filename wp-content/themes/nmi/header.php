<!doctype html>
<head>
	<meta charset="utf-8">
		<title>
			<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); ?> 
		</title>
  		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/fonts.css">
  		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css">
  		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
	<?php /*
		Google analytics!!
	*/?>

		<?php 
			// check wp user level
			get_currentuserinfo(); 
			// store to use later
			global $user_level; 
 ?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "UA-38735919-1"]);_gaq.push(["_gat._anonymizeIp"]);_gaq.push(["_setDomainName", ".nmiindustrial.com"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://" : "http://") + "stats.g.doubleclick.net/dc.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
</script>
</head>
	<?php global $class; $class = isset($class)? ' class="'.$class.'"': ''; ?>
	<body <?php echo $class; ?>>
	<div class="container" id="wrapper">
		<div class="row">
			<div class="span3"><a id="logo" href="/">NMI Industrial</a></div>
				<div class="span4 offset5" id="utility_links">
			<?php if(!is_front_page()) :?>
					<a href="/">NMI Industrial</a> | 
			<?php endif; ?>
					<a id="clink" data-toggle="modal" data-target="#careerModal" href="#careers">Careers</a> | 
					<a id="clink" data-toggle="modal" data-target="#contactModal" href="#contact">Contact</a>
				</div>
		</div>

