
<?php get_header(); ?>
<nav class="bread-crumb">
	<?php
	if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
		echo '<ol>';
		echo do_shortcode( '[wp-structuring-markup-breadcrumb]' );
		echo '</ol>';
	}
	?>
</nav>
<div class="contents">
	<main>
		<?php if ( have_posts() ) : ?>
			<article>
				<?php
					the_post();
					the_title( '<h1>', '</h1>' );
				?>
				更新日:<?php the_modified_time( get_option( 'date_format' ) ); ?>
				/著者:<?php the_author(); ?>
				<p><?php the_content();?></p>
			</article>
		<?php endif; ?>
	</main>

<?php
		get_sidebar();
 		get_footer();
