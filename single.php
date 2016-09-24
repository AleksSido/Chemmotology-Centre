<?php 
/****** 
** The template for single post
** contains conditional tags for posts of tree with id=68 (conference problems of chemmotology posts), aimed to do not display date of post and
** back and up links 
******/
?>
<?php get_header(); ?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<?php if ( in_category( '12' ) ) { ?>
			<div class="page-content no-background no-text-indent">
		<?php } else { ?>
			<div class="page-content no-background">
		<?php } ?>
				<h2 class="parent-page-title"><?php wp_title(''); ?></h2>
				<?php if ( !in_category( '12' ) ) { ?>		
					<p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></p>	
				<?php } 
				if( have_posts() ) : while( have_posts() )  : the_post(); 				
					the_content();
					get_template_part( 'share', 'buttons' ); 
					if ( !in_category( '12' ) ) { ?>
						<div class="link-read-news">
							<a href="javascript: window.scrollTo( 0, 0 );"><p>&uarr;</p></a>
							<a href="<?php print $_SERVER['HTTP_REFERER'];?>"><p><?php esc_html_e( 'Back to News', 'chemmotology-centre' ); ?></p></a>
						</div>		
					<?php } 
					endwhile;
				endif; ?>			
			</div><!-- div.page-content no-background or div.page-content no-background no-text-indent-->
	</div><!-- div.for-page-content -->
<?php get_footer(); ?>