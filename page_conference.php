<?php 
/****** Template Name: Conference Problems of Chemmotology
** The template for displaying the page Conference Problems of Chemmotology and its subpages
******/
?>
<?php get_header(); ?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content no-background">			
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>				
			<h2 class="parent-page-title"><?php the_title(); ?></h2>
			<?php the_content(); 
				get_template_part( 'share', 'buttons' ); 
				endwhile; 
			else : 
			?>
			<h3><?php _e( '404 Error&#58; Not Found', 'symbol' ); ?></h3>
		<?php endif; ?>
		</div><!-- div.page-content no-background -->
	</div><!-- div.for-page-content -->
<?php get_footer(); ?>