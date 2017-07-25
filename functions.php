<?php

// Theme Updater
if( ! class_exists( 'Theme_Updater' ) ) {
    require_once( get_template_directory() . '/inc/updater.php' );

    if ( is_admin() ) {
        $config = array(
            'slug' => 'repository-name',
            'owner' => 'username',
            'api_url' => 'https://api.github.com/repos/username/repository-name/releases'
        );
        new Theme_Updater( $config );
    }
}
