<?php



/**
 * Groups the old settings into just one setting option
 *
 * @since 1.9
 */
function incsub_support_group_settings_upgrade() {
	$saved_version = get_site_option( 'incsub_support_version', false );
	if ( ! $saved_version || version_compare( $saved_version, '1.9' ) < 0 ) {
		// We're going to group all settings into one option
		$default_settings = MU_Support_System::get_default_settings();
		$old_settings = array(
			'incsub_support_menu_name' => get_site_option( 'incsub_support_menu_name', $default_settings['incsub_support_menu_name'] ),
			'incsub_support_from_name' => get_site_option( 'incsub_support_from_name', $default_settings['incsub_support_from_name'] ),
			'incsub_support_from_mail' => get_site_option( 'incsub_support_from_mail', $default_settings['incsub_support_from_mail'] ),
			'incsub_support_fetch_imap' => get_site_option('incsub_support_fetch_imap', $default_settings['incsub_support_fetch_imap'] ),
			'incsub_support_imap_frequency' => get_site_option('incsub_support_imap_frequency', $default_settings['incsub_support_imap_frequency'] ),
			'incsub_allow_only_pro_sites' => get_site_option( 'incsub_allow_only_pro_sites', $default_settings['incsub_allow_only_pro_sites'] ),
			'incsub_pro_sites_level' => get_site_option( 'incsub_pro_sites_level', $default_settings['incsub_pro_sites_level'] ),
			'incsub_allow_only_pro_sites_faq' => get_site_option( 'incsub_allow_only_pro_sites_faq', $default_settings['incsub_allow_only_pro_sites_faq'] ),
			'incsub_pro_sites_faq_level' => get_site_option( 'incsub_pro_sites_faq_level', $default_settings['incsub_pro_sites_faq_level'] ),
			'incsub_ticket_privacy' => get_site_option( 'incsub_ticket_privacy', $default_settings['incsub_ticket_privacy'] ),
			'incsub_support_faq_enabled' => get_site_option( 'incsub_support_faq_enabled', false ),
			'incsub_support_tickets_role' => get_site_option( 'incsub_support_tickets_role', $default_settings['incsub_support_tickets_role'] ),
			'incsub_support_faqs_role' => get_site_option( 'incsub_support_faqs_role', $default_settings['incsub_support_faqs_role'] )
		);
		update_site_option( 'incsub_support_settings', $old_settings );

		foreach ( $old_settings as $key => $value ) {
			delete_site_option( $key );
		}
	}
}


/**
 * Upgrades the plugin
 *
 * @since 1.8
 *
 */
function incsub_support_check_for_upgrades() {

	$saved_version = get_site_option( 'incsub_support_version', false );

	if ( ! $saved_version || version_compare( $saved_version, INCSUB_SUPPORT_PLUGIN_VERSION ) < 0 ) {

		$model = MU_Support_System_Model::get_instance();

		if ( version_compare( $saved_version, '1.7.2.2' ) < 0 )
			$model->upgrade_1722();

		if ( version_compare( $saved_version, '1.8' ) < 0 )
			$model->upgrade_18();

		if ( version_compare( $saved_version, '1.8.1' ) < 0 )
			$model->upgrade_181();

		if ( version_compare( $saved_version, '1.9.1' ) < 0 ) {
			incsub_support_set_new_roles();
		}

		if ( version_compare( $saved_version, '1.9.6' ) < 0 ) {
			$model->upgrade_196();
		}

		if ( version_compare( $saved_version, '1.9.8' ) < 0 ) {
			$model->upgrade_198();
		}

		if ( version_compare( $saved_version, '1.9.8.1' ) < 0 ) {
			$model->upgrade_1981();
		}

		update_site_option( 'incsub_support_version', INCSUB_SUPPORT_PLUGIN_VERSION );
	}

}


/**
 * Sets a new system based on roles instead of capabilities
 *
 * @since 1.9.1
 */
function incsub_support_set_new_roles() {
	global $wp_roles;

	$roles_settings = array(
		'incsub_support_tickets_role' => MU_Support_System::$settings['incsub_support_tickets_role'],
		'incsub_support_faqs_role' => MU_Support_System::$settings['incsub_support_faqs_role']
	);

	foreach ( $roles_settings as $key => $value ) {
		switch ( $value ) {
			case 'manage_options':
				MU_Support_System::$settings[ $key ] = array( 'administrator' );
				break;
			case 'publish_pages':
				MU_Support_System::$settings[ $key ] = array( 'administrator', 'editor' );
				break;
			case 'publish_posts':
				MU_Support_System::$settings[ $key ] = array( 'administrator', 'editor', 'author' );
				break;
			case 'edit_posts':
				MU_Support_System::$settings[ $key ] = array( 'administrator', 'editor', 'author', 'contributor' );
				break;
			case 'read':
				MU_Support_System::$settings[ $key ] = array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' );
				break;
		}
	}

	update_site_option( 'incsub_support_settings', MU_Support_System::$settings );
}