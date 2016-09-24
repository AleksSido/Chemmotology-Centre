<?php
/******
** The template for displaying the contact form
** contains the form with title and header "Thank you for mail!" for sent mail, and unset session variable to avoid the repeat of mail form sending.  
******/
	if ( isset( $_SESSION['sent'] ) ) {
?>
<h3 class="news-title"><?php esc_html_e( 'Thank you for mailing us!', 'chemmotology-centre' ); ?></h3>
<?php    	
	unset( $_SESSION['sent'] );
} else {
?>
	<h3 class="news-title"><?php esc_html_e( 'Mail a letter to us: ', 'chemmotology-centre' ); ?></h3>
	<form class="contact-form" method="post">
		<?php esc_html_e( 'Name' ); ?>:<br>
		<input type="text" name="who" value=""><br>
		E-mail:<br>
		<input type="email" name="email" value=""><br>
		<?php esc_html_e( 'Your phone', 'chemmotology-centre' ); ?>:<br>	
		<input type="text" name="phone" value=""><br>
		<?php esc_html_e( 'Your message', 'chemmotology-centre' ); ?>:<br>
		<textarea type="text" name="message" rows="10" cols="40"></textarea><br><br>
		<input type="submit" name="tosendmail" value="<?php esc_attr_e( 'Send', 'chemmotology-centre' ); ?>">
		<input type="reset" value="<?php esc_attr_e( 'Reset', 'chemmotology-centre' ); ?>"> 
	</form>  
<?php } ?>