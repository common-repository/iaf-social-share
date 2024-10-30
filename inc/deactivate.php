<?php
function iaf_deactivate_plugin() {
    if( $iaf_opts ) {
        delete_option( 'iaf_social_share_opts' );
    }
}
