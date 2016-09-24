<?php 
/******
** The template for displaying the results of search
** 
******/
	get_header(); 
?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content  no-background">	
			<h2 class="parent-page-title"><?php echo sprintf( __('Search Results for &#8220;%s&#8221;'), $s );  ?></h2>
			<div class="for-search">
				<?php get_search_form(); ?>		
			</div>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>				
				<a class="novyny-post-hyperlink" href="<?php echo get_permalink(); ?>">
					<h3 class="page-title"><?php the_title(); ?></h3>										
				 	<?php the_excerpt(); ?>
				</a>
				<?php endwhile; ?>
			<?php else : ?>
				<h3 class="page-title"><?php esc_html_e( 'Sorry, but there is nothing found for your request!', 'chemmotology-centre' ); ?></h3>
			<?php endif; ?>			
		</div><!-- div.page-content -->	
	</div><!-- div.for-page-content -->	
<?php get_footer(); ?>