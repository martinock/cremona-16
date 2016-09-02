<html>
	<head>
		<title>
			<?php wp_title('|', true, 'right'); ?>
			<?php echo get_bloginfo( 'name' ); ?>
		</title>
<!--		<link rel="stylesheet" href="fuck2.css">	-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/favicon.png"/>
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/w3.css">
	</head>
	<body <?php body_class(); ?>  >

		<div class="a">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_directory') ?>/assets/cremona.png" style="float: left;  margin-left: 10%; margin-right: 15%">
			</a>
			<div style="width:auto; float:left; padding: 1% 8% 1% 8%"></div>
			
			<nav class="hl" style="list-style-type: none">
<!--				<a class="hl" href="#">Home</a> -->
				<?php
	                $args = array(
	                    'menu' => 'header-menu',
	                    'menu_class' => 'hl',
	                    'container' => 'false'
	                );
	                wp_nav_menu($args);
	            ?>
				<!--<?php wp_list_pages( 'sort_column=ID&amp;sort_order=asc&amp;&title_li='); ?>-->
			</nav>
		</div>
		<?php wp_head(); ?>