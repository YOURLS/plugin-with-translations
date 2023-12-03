<?php
/*
Plugin Name: Sample plugin with translations
Plugin URI: https://yourls.org/docs/development/i18n
Description: Plugin that comes with English and French translations. See: https://yourls.org/docs/development/i18n
Version: 0.1
Author: Ozh

*/

// What the plugin does : simply add the sentence "The sample plugin with translations is loaded" in the footer.

yourls_add_filter( 'html_footer_text', 'ozh_show_plugin_translation_loaded' );
function ozh_show_plugin_translation_loaded($footer) {
    $footer .= "\n<br/>\n" . yourls__('The sample plugin with translations is loaded.', 'ozh-plugin-translation') . "";
    // See : https://yourls.org/docs/development/i18n
    return $footer;
}

// Load the translation files if available

yourls_add_action( 'plugins_loaded', 'ozh_show_plugin_translation_load_textdomain' );
function ozh_show_plugin_translation_load_textdomain() {
    yourls_load_custom_textdomain( 'ozh-plugin-translation', dirname( __FILE__ ) . '/languages' );
}

