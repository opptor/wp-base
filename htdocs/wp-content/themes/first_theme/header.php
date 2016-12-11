<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<link media="all" rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" />
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container">
			<nav class="col-md-12 blog-nav">
				<a class="blog-nav-item current_page_item current-menu-item" href="/">Home</a>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<div class="blog-header">
				<h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>