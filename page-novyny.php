<?php 
/******
** The template for displaying the page Новини
** contains conditional tags for posts of category=11 and pagination for 5 posts per page
******/
?>
<?php get_header(); ?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content no-background">
			<h2 class="parent-page-title"><?php wp_title(''); ?></h2>
			<?php 
				$paged = ( get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
				query_posts( 'cat=11&posts_per_page=5&paged=' . $paged ); 
				if( have_posts() ) : while( have_posts() ) : the_post(); ?>			
					<a class="novyny-post-hyperlink" href="<?php echo get_permalink(); ?>">
						<h3 class="news-title"><?php the_title(); ?></h3>
						<p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></p>				
				 		<?php 
							the_post_thumbnail(); 
							the_excerpt(); 
						?>
						<div class="link-read-news">
							<p><?php esc_html_e( 'Read news', 'chemmotology-centre' ); ?></p>
						</div>
					</a><!-- for a with href for post permalink -->
					<div class="clearfix"></div>								 
					<?php endwhile; ?>
					<!-- pagination -->
					<div class="for-pagination">
						<?php next_posts_link( esc_html__( 'Previous News&rarr;', 'chemmotology-centre' ) ); ?>
						<?php previous_posts_link( esc_html__( '&larr; Next News', 'chemmotology-centre' ) ); ?>
					</div>							
				<?php else : ?>
					<h3  class="page-title"><?php _e( '404 Error&#58; Not Found', 'symbol' ); ?></h3>
				<?php endif; ?>
		</div><!-- div.page-content no-background -->
	</div><!-- div.for-page-content -->
<?php get_footer(); ?>