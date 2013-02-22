<?php
/**
 * The template for displaying search forms in allisonMCAD_wptheme
 *
 * @package allisonMCAD_wptheme
 * @since allisonMCAD_wptheme 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'allisonmcad_wptheme' ); ?></label>
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'allisonmcad_wptheme' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'allisonmcad_wptheme' ); ?>" />
	</form>
