
<?php get_header(); ?>

<div class="contents">
	<main>
		<section>
			<?php
			echo '<h1>検索キーワード：';
			echo get_search_query();
			echo '</h1>';
		?>
		<?php if ( have_posts() ) : ?>
			<ul>
				<?php while( have_posts() ) : the_post(); ?>
				<li>
					<?php
					$html  = '';
					$html .= '<a href="' . get_the_permalink() . '">';
					$html .= get_the_title();
					$html .= '</a>';
					$html .= '<p>' . get_the_excerpt() . '</p>';
					$html .= '<time>' . get_the_time('Y年m月d日 ') . '</time>';
					$html .= '<span>著者:' . get_the_author() . '</span>';
					echo $html;
					?>
				</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>検索結果[<?php echo get_search_query(); ?>]:0</p>
		<?php endif; ?>
		</section>
	</main>

<?php
		get_sidebar();
 		get_footer();
