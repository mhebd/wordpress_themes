<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 */
$cleancut_aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $cleancut_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">

    <input type="search" id="search-form-input" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'borofpani' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

    <button class="btn btn-secondary search-btn search-submit input-group-append" type="submit">
    <i class="fas fa-arrow-right"></i>
    </button>
  </div>
</form>
