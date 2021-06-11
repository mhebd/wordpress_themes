<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */

add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function custom_theme_options() {

	// OptionTree is not loaded yet, or this is not an admin request.
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
		return false;
	}

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the OptionTree Settings API Class.
	 */
	$custom_settings = array(
		'contextual_help' => array(
			'content' => array(
				array(
					'id'      => 'option_types_help',
					'title'   => __( 'Option Types', 'theme-text-domain' ),
					'content' => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>',
				),
			),
			'sidebar' => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>',
		),
		'sections'        => array(
			array(
				'id'    => 'header_social_links',
				'title' => __( 'Header Social Link', 'theme-text-domain' ),
			),
			array(
				'id'    => 'post_share_btn',
				'title' => __( 'Post share Button', 'theme-text-domain' ),
			),
			array(
				'id'    => 'copywrite',
				'title' => __( 'Foote Copywrite', 'theme-text-domain' ),
			),
		),
		'settings'        => array(
      array(
        'id' => 'social_link',
        'label' => 'Header Social Link',
        'desc' => 'Option tree option for Header Social Link',
        'type' => 'list_item',
        'section' => 'header_social_links',
        'settings' => array(
          array(
            'id' => 'social_link_name',
            'label' => 'Header Social Link Name',
            'desc' => '',
            'type' => 'text',
          ),
          array(
            'id' => 'social_link_link',
            'label' => 'Header Social Link link',
            'desc' => '',
            'type' => 'text',
          ),
          ),
      ),
      array(
        'id' => 'share_link',
        'label' => 'Post Social share Button',
        'desc' => 'Option tree option for post social share button',
        'type' => 'list_item',
        'section' => 'post_share_btn',
        'settings' => array(
          array(
            'id' => 'share_btn_name',
            'label' => 'share btn name',
            'desc' => '',
            'type' => 'text',
          ),
          array(
            'id' => 'share_btn_link',
            'label' => 'share btn link',
            'desc' => '',
            'type' => 'text',
          ),
          array(
            'id' => 'share_btn_type',
            'label' => 'share type',
            'desc' => '',
            'type' => 'text',
          ),
          ),
      ),
      array(
        'id' => 'copywrite_sec',
        'label' => 'Copywrite Text',
        'desc' => 'Option tree option for Copywrite Text',
        'type' => 'textarea',
        'section' => 'copywrite',
      ),
      array(
        'id' => 'copywrite_designer_sec',
        'label' => 'Copywrite Designer name',
        'desc' => 'Option tree option for Copywrite Designer Name',
        'type' => 'textarea',
        'section' => 'copywrite',
      ),
		),
	);

	// Allow settings to be filtered before saving.
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	// Settings are not the same update the DB.
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	// Lets OptionTree know the UI Builder is being overridden.
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
