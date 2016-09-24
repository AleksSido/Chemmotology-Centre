<?php 
/******
** The template for displaying the page Історія та архіви
** contains conditional tags for posts of category=12,
******/
?>
<?php get_header(); ?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content no-background">		
		<?php query_posts( 'cat=12' ); ?>		
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>			
			<a class="novyny-post-hyperlink" href="<?php echo get_permalink(); ?>">
				<h3 class="news-title"><?php the_title(); ?></h3>
			</a><!-- for a with href for post permalink -->
			<?php endwhile; ?>
		<?php else : ?>
			<h3><?php _e( '404 Error&#58; Not Found', 'symbol' ); ?></h3>
		<?php endif; ?>
		</div><!-- div.page-content no-background -->	
	</div><!-- div.for-page-content -->
<?php get_footer(); ?>