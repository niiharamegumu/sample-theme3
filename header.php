<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(function(){
	$("#pickup_field").SlideShow({
		now_id :1,
		slideSpeed : 2000
	});
});
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1>
			<a href="<?php echo home_url( '/' ); ?>">
<<<<<<< HEAD
				<?php
=======
			<?php
>>>>>>> 16ae4aee1744fa8d3d623f2453cd6cf4ba6395a1
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$format	= '<img';
					$format .= ' src="' . $image[0] . '"';
					$format .= ' width="' . $image[1] . '"';
					$format .= ' height="' . $image[2] . '"';
					$format .= ' alt="' . get_bloginfo( 'name' ) . '">';
					echo $format;
				?>
			</a>
		</h1>
	</header>
<<<<<<< HEAD

=======
>>>>>>> 16ae4aee1744fa8d3d623f2453cd6cf4ba6395a1
	<nav class="nav-global">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary1'
			)
		);
	?>
	</nav>
