<html>

<head>
<title>Polski Rap</title>
<!-- zaimportowac arkusz stylow z tematu  <link rel="stylesheet" href=""> -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>

<div id="wrapper">
	<div id="header">
	<div id="logo">
	 <?php
	 if( file_exists(TEMPLATEPATH . '/images/logo.png')){?>
			<a href="<?php echo get_bloginfo('url');?>">
			<img src="<?php bloginfo('template_url');?>/images/logo.png" alt="<?php bloginfo('name')?>" width="100px" height="100px"/>
			</a>
			<?php }
			else{?>
				<h1><a href="<?php bloginfo('url')?>"> <?php bloginfo('name')?></a></h1> 
			<?php } ?>
				

	</div>
	<div id="desc">
	<?php $blog_title = get_bloginfo(); ?> <!-- Assign blog name to blog_title variable-->
	<?php $blog_description = get_bloginfo('description');?>
	<h1><?php echo "$blog_title";?></h1> <!-- Writing blog title -->
	<h2><?php echo "$blog_description";?></h2> <!-- Blog description -->
	</div>
	
	
	<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'div', 'container_class' => '', 'container_id' => 'navmenu'));?> 
	
	<hr width="60%">

	</div>
	