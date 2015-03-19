<?php
/**
 * @package WordPress
 * @subpackage wpbstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets
	================================================== -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!-- the Body -->
<div class="container">
	<div class="navbar navbar-inverse navbar-relative-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
					<?php bloginfo('name'); ?></a>
				<?php wp_nav_menu(
					array(
						'menu' => 'main-menu',
						'container_class' => 'nav-collapse collapse',
						'menu_class' => 'nav',
						'fallback_cb' => '',
						'menu_id' => 'main-menu',
					)
				); ?>
			</div>
		</div>
	</div>
	<!-- End Header. Begin Template Content -->
