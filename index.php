<?php
/******
** The main template for pages
** contains conditional tags for h2 title option or h2 &h3 titles option.
** div.page-content contains background logo.
******/
get_header(); ?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content">			
		<?php if( have_posts() ) : ?><?php while( have_posts() )  : the_post(); ?>				
			<?php if ( empty($post->post_parent) ) { ?>
				<h2 class="parent-page-title"><?php the_title(); ?></h2>	
			<?php	} else { ?>
				<h2 class="parent-page-title"><?php echo get_the_title($post->post_parent); ?></h2>
				<h3 class="page-title"><?php the_title(); ?></h3>
			<?php	} ?>								
				 <?php the_content(); ?>				
				<?php get_template_part( 'share', 'buttons' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<h3  class="page-title"><?php _e( '404 Error&#58; Not Found', 'symbol' ); ?></h3>
		<?php endif; ?>			
		</div><!-- div.page-content -->	
	</div><!-- div.for-page-content -->	
<?php get_footer(); ?>