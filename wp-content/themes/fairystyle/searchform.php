<?php
/**
 * The template for displaying search form.
 *
 * @package __Tm
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Buscar por:', 'label', 'fairy_style' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( 'Buscar &hellip;', 'placeholder', 'fairy_style' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'fairy_style' ) ?>" />
	</label>
	<button type="submit" class="search-form__submit btn">Buscar</button>
</form>