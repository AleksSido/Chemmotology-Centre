<?php 
/****** Template Name: Without Background Logo
** The template is identical to index.php, but it hasn't background logo due to "no-background" class for div.page-content.
** The template contains session to prevent repeat send of mail form.
******/
?>
<?php 
	session_start();
	if ( !empty( $_POST['tosendmail'] ) ) {
		$_SESSION['admin_email'] = "sidorovav@ukr.net";
		$_SESSION['who'] = $_REQUEST['who'];
		$_SESSION['email'] = $_REQUEST['email'];
		$_SESSION['phone'] = $_REQUEST['phone'];
		$_SESSION['message'] = $_REQUEST['message'];	
		$send = mail( $_SESSION['admin_email'], $_SESSION['who'] . " Tel.: " . $_SESSION['phone'], $_SESSION['message'], "From:" . $_SESSION['email'] );
		if ( $send ) {
			$_SESSION['sent'] = true;
		}
		header( "Location: " . $_SERVER["REQUEST_URI"] );  
		exit;
	}
	get_header(); 
?>
	<div class="col-sm-8 col-xs-12 for-page-content">
		<div class="page-content no-background">			
		<?php if( have_posts() ) : while( have_posts() )  : the_post(); 					
			if ( empty($post->post_parent) ) { ?>
				<h2 class="parent-page-title"><?php the_title(); ?></h2>						
			<?php } else { ?>
				<h2 class="parent-page-title"><?php echo get_the_title($post->post_parent); ?></h2>
				<h3 class="page-title"><?php the_title(); ?></h3>
			<?php	}
				the_content(); 
				if ( is_page( 'contact' ) ) {
					get_template_part( 'contact', 'us' ); 
				} 
				get_template_part( 'share', 'buttons' ); 
				endwhile; 
		else : ?>						
			<h3><?php _e('404 Error&#58; Not Found', 'symbol'); ?></h3>
		<?php endif; ?>
		</div><!-- div.page-content no-background -->
	</div><!-- div.for-page-content -->
<?php	get_footer(); ?>