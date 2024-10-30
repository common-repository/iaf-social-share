<?php
function iaf_enqueue(){
    $iaf_opts           = get_option( 'iaf_social_share_opts' );
    
    // Register skins stylesheet
    switch( $iaf_opts['theme'] ){
        case 'default';
            $theme_file     = 'style-default.css';
        break;

        case 'light';
            $theme_file     = 'style-light.css';
        break;
        
        case 'dark';
            $theme_file     = 'style-dark.css';
        break;

        case 'custom';
            $theme_file     = 'style-custom.css';
        break;
        
        default;
            $theme_file     = 'style-default.css';
        break;
    }

    wp_register_style( 'iaf_style', plugins_url( 'assets/css/style.css', IAF_PLUGIN_FILE ) );
    wp_register_style( 'iaf_roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap' );
    wp_register_style( 'iaf_theme', plugins_url( 'assets/css/' . $theme_file, IAF_PLUGIN_FILE ) );

    // Hide text on mobile
    if( wp_is_mobile() AND $iaf_opts['mobile'] == 'hide_text' ){
        wp_add_inline_style( 'iaf_style', '.iaf-social-share-wrap .iaf-text { display: none; }' );
    }

    // Hide icon on mobile
    if( wp_is_mobile() AND $iaf_opts['mobile'] == 'hide_icon' ){
        wp_add_inline_style( 'iaf_style', '.iaf-social-share-wrap .iaf-icon { display: none; }' );
    }
    
    // Hide text on desktop
    if( !wp_is_mobile() AND $iaf_opts['display'] == 'icon_only' ){
        wp_add_inline_style( 'iaf_style', '.iaf-social-share-wrap .iaf-text { display: none; }' );
    }

    // Hide icon on desktop
    if( !wp_is_mobile() AND $iaf_opts['display'] == 'text_only' ){
        wp_add_inline_style( 'iaf_style', '.iaf-social-share-wrap .iaf-icon { display: none; }' );
    }

    // Custom color
    if( $iaf_opts['theme'] == 'custom' AND !empty( $iaf_opts['color'] ) ){
        wp_add_inline_style( 
            'iaf_style', 
            '.iaf-social-share-wrap a {
                border: 2px solid '. $iaf_opts['color'] .';
                background: '. $iaf_opts['color'] .';
            }
            
           .iaf-social-share-wrap a:hover,
            .iaf-social-share-wrap a:focus {
                border: 2px solid '. $iaf_opts['color'] .';
                color: '. $iaf_opts['color'] .';
            }' 
        );
    }

    // Enqueue styles
    wp_enqueue_style( 'iaf_style' );
    wp_enqueue_style( 'iaf_style_float' );
    wp_enqueue_style( 'iaf_roboto' );
    wp_enqueue_style( 'iaf_font_awesome' );
    wp_enqueue_style( 'iaf_theme' );

    // Register scripts
    wp_register_script( 'iaf_popup', plugins_url( 'assets/js/socialSharePopup.js', IAF_PLUGIN_FILE ), [], null, true );
    wp_register_script( 'iaf_font_awesome_kit', 'https://kit.fontawesome.com/5d7ba09a50.js', [], null, false );

    // Enqueue script
    wp_enqueue_script( 'iaf_popup' );
    wp_enqueue_script( 'iaf_font_awesome_kit' );
}

function iaf_admin_enqueue(){
    if( !isset( $_GET['page'] ) || $_GET['page'] != 'iaf-social-share' ){
        return;
    }

    wp_register_style( 'iaf_admin_style', plugins_url( 'assets/css/admin-style.css', IAF_PLUGIN_FILE ) );
    wp_register_style( 'iaf_font_awesome', plugins_url( 'assets/font-awesome/css/all.css', IAF_PLUGIN_FILE ) );

    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style( 'iaf_admin_style' );
    wp_enqueue_style( 'iaf_font_awesome' );

    wp_register_script( 'iaf_color_picker', plugins_url('assets/js/color-picker.js', IAF_PLUGIN_FILE ), [ 'wp-color-picker' ], false, true );
    wp_register_script( 'iaf_main', plugins_url('assets/js/main.js', IAF_PLUGIN_FILE ), [ 'jquery' ], false, true );

    wp_enqueue_script( 'iaf_color_picker' );
    wp_enqueue_script( 'iaf_main' );
}