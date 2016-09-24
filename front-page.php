<?php 
/******
** The template for displaying the front-page
** contains round logo in the center and three language icons around it.
******/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container-fluid">			
			<a href="<?php echo esc_url( '/centr/hystor/' ); ?>">
				<img id="front-page-logo" src="http://chemmotology.nau.edu.ua/wp-content/uploads/2016/06/logo1.png">	
			</a>
			<a id="lang-uk" href="<?php echo esc_url( '/centr/hystor/' ); ?>">UK</a>			
			<a id="lang-ru" href="<?php echo esc_url( '/ru/centr/hystor/' ); ?>">RU</a>
			<a id="lang-en" href="<?php echo esc_url( '/en/centr/hystor/' ); ?>">EN</a>			
		</div><!-- div.container-fluid -->
		<?php wp_footer(); ?>
	</body>
</html>	