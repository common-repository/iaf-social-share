<?php
function iaf_activate_plugin(){
    /*
     * Check WordPress version
     */

    if( version_compare( get_bloginfo( 'version' ), '4.9', '<' ) ){
        wp_die( __( 'You have to upgrade your WordPress version before you can use this plugin', 'iaf-social-share' ) );
    }

    /*
     * Create option with default values
     */

    $iaf_opts                           = get_option( 'iaf_social_share_opts' );

    if( !$iaf_opts ){
        $opts                           = [
            'facebook'                  => 'show',
            'twitter'                   => 'show',
            'twitter_handle'            => 'wordpressdotcom',
            'linkedin'                  => 'show',
            'whatsapp'                  => 'show',
            'telegram'                  => 'show',
            'before_content'            => 'hide', 
            'after_content'             => 'show',
            'share_post'                => 'show',
            'share_page'                => 'hide',
            'share_archive'             => 'hide',
            'display'                   => 'icon_and_text',
            'mobile'                    => 'hide_text',
            'theme'                     => 'default',
            'color'                     => '#000000'
        ];

        $iaf_cpts                       = get_post_types( array( '_builtin' => false ), 'objects' );
        foreach( $iaf_cpts as $cpt ) {
            $opts['share_'.$cpt->name]  = 'show';
        }

        add_option( 'iaf_social_share_opts', $opts );
    }
}