<?php 
/******
** The template for displaying the footer
** contains conditional tags for pages of tree with id=68 and posts in category=12,
** top div with header image, h1 title and h5 description,
** left sidebar with navigation menu
******/
?>	
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part( 'analyticstracking' ); ?>
		<div class="container-fluid">
			<header class="header">
				<div class="row">
					<div class="for-image-header">	
						<?php if ( is_tree( '68' ) || is_tree( '27' ) || is_tree( '32' ) || in_category( '12' ) ) { ?>
							<a href="<?php echo esc_url( get_permalink( get_page_by_title( esc_attr__( 'Activity', 'chemmotology-centre' ) ) ) ); ?>">	
						<?php } else { ?>
							<a href="<?php echo esc_url( '/' ); ?>">	
						<?php } ?>
							<img class="img-responsive" src="<?php header_image(); ?>" alt="<?php esc_attr_e( 'UkrREC of Chemmotology and Certification of FLTL', 'chemmotology-centre' ); ?>"/>
						</a>
					</div>
					<div class="for-site-title">
					<?php if ( is_tree( '68' ) || is_tree( '27' ) || is_tree( '32' ) || in_category( '12' ) ) { ?>
						<h1 class="conference-h1"><a href="<?php echo esc_url( '/confer/problem-chemmotology/' ); ?>">&#8220;<?php esc_html_e( 'Problems of Chemmotology. Theory and', 'chemmotology-centre' ); ?><br><?php esc_html_e( 'Practice of Rational Use of Traditional and', 'chemmotology-centre' ); ?><br><?php esc_html_e( 'Alternative Fuel and Lubricants', 'chemmotology-centre' ); ?>&#8221;</a></h1>
						<h5 class="site-description"><?php esc_html_e( 'The VIth International Conference of Science and Technology', 'chemmotology-centre' ); ?></h5>
					<?php } else { ?>
						<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'UkrREC', 'chemmotology-centre' ); ?><br><?php esc_html_e( 'of Chemmotology and Certification of FLTL', 'chemmotology-centre' ); ?></a></h1>
						<h5 class="site-description"><?php esc_html_e( 'Ukrainian Research and Educational Center', 'chemmotology-centre' ); ?><br><?php esc_html_e( 'of Chemmotology and Certification of Fuels, Lubricants and Technical Liquids', 'chemmotology-centre' ); ?></h5>
					<?php } ?>
					</div>
					<div class="for-header-lang-icons">
						<?php if ( !is_search() ) {
							get_search_form(); 
							} ?>
						<?php if ( get_locale() !== 'uk' ) { ?>
							<a id="lang-uk-header" href="<?php lang_icon_href( '' ); ?>">UK</a>
						<?php } ?>
						<?php if ( get_locale() !== 'ru_RU' ) { ?>
							<a id="lang-ru-header" href="<?php lang_icon_href( '/ru' ); ?>">RU</a>
						<?php } ?>
						<?php if ( get_locale() !== 'en_US' ) { ?>
							<a id="lang-en-header" href="<?php lang_icon_href( '/en' ); ?>">EN</a>
						<?php } ?>
					</div>
					<div class="for-header-contacts">
						
						<p class="phone-footer"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 044-408-54-00</p>
						<p class="phone-footer"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 044-406-70-87</p>
						<p class="e-mail-footer"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> chemmotology@nau.edu.ua</p>
					</div>
				</div><!-- div.row -->	
			</header><!-- site header-->			
			<div class="for-site-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
      					</button>      
    				</div><!-- div.navbar-header -->
				<?php
					if ( is_tree( '68' ) || in_category( '12' ) ) {	
					 wp_page_menu( array( 'child_of' => '68') );					
					} elseif ( is_tree( '27' ) ) {
					 wp_page_menu( array( 'child_of' => '27') );
					} elseif ( is_tree( '32' ) ) {
					 wp_page_menu( array( 'child_of' => '32') );	
					}
else {					
					 wp_nav_menu();
					}	 
				?>
			</div><!-- div.for-site-nav -->			