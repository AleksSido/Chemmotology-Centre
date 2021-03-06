<?php
/******
** The template for displaying the search form
** 
******/
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>        	
        	<input type="search" class="search-field"
            		placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            		value="<?php echo get_search_query() ?>" name="s"
            		title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" >
    	</label>
    	<button type="submit" class="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</form>