<?php
if( !defined( 'WP_UNINSTALL_PLUGIN' ) ){
    exit;
}

$iaf_opts           = get_option( 'iaf_social_share_opts' );

if( $iaf_opts ) {
    delete_option( 'iaf_social_share_opts' );
}