<?php 
/******
** The template for displaying the footer
** contains the closing of general div.container-fluid and bottom div with contacts, copyright and made by.
******/
?>			
			<div class="clearfix"></div>			
			<footer class="footer">
				<div class="row for-footer">	
					<div class="for-centre-position">				
						<p class="e-mail-footer"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> chemmotology@nau.edu.ua</p>
						<p class="phone-footer"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 044-408-54-00</p>
						<p class="phone-footer"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 044-406-70-87</p>
					</div>
					<div class="clearfix"></div>
					<p class="pull-left copyright">&copy; <?php 
											echo date( 'Y' ); 
											esc_html_e( 'UkrREC of Chemmotology and Certification of FLTL', 'chemmotology-centre'); 
										?>
					</p>					
					<a class="pull-right developer"><?php esc_html_e( 'Developed by Sidorov Aleksandr', 'chemmotology-centre' ); ?></a>					
					<a class="pull-right developer"><?php echo "Powered by WP"; ?></a>
				</div><!-- div.row for-footer -->
			</footer>
		</div><!-- div.container-fluid -->
		<?php wp_footer(); ?>
	</body>
</html>	

