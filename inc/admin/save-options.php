<?php
function iaf_save_options(){
    if( !current_user_can( 'manage_options' ) ){
        wp_die( __( 'You don\'t have enough privilege to see this page' ) );
    }

    echo '<pre>';
    var_dump( $_POST );
    echo '</pre>';

    check_admin_referer( 'iaf_options_verify' );

    $iaf_opts                           = get_option( 'iaf_social_share_opts' );
    $iaf_opts['facebook']               = sanitize_text_field( $_POST['iaf_facebook'] );
    $iaf_opts['twitter']                = sanitize_text_field( $_POST['iaf_twitter'] );
    $iaf_opts['twitter_handle']         = sanitize_text_field( $_POST['iaf_twitter_handle'] );
    $iaf_opts['linkedin']               = sanitize_text_field( $_POST['iaf_linkedin'] );
    $iaf_opts['whatsapp']               = sanitize_text_field( $_POST['iaf_whatsapp'] );
    $iaf_opts['telegram']               = sanitize_text_field( $_POST['iaf_telegram'] );
    $iaf_opts['before_content']         = sanitize_text_field( $_POST['iaf_before_content'] );
    $iaf_opts['after_content']          = sanitize_text_field( $_POST['iaf_after_content'] );
    $iaf_opts['float']                  = sanitize_text_field( $_POST['iaf_float'] );
    $iaf_opts['share_post']             = sanitize_text_field( $_POST['iaf_share_post'] );
    $iaf_opts['share_page']             = sanitize_text_field( $_POST['iaf_share_page'] );
    $iaf_opts['display']                = sanitize_text_field( $_POST['iaf_display'] );
    $iaf_opts['mobile']                 = sanitize_text_field( $_POST['iaf_mobile'] );
    $iaf_opts['theme']                  = sanitize_text_field( $_POST['iaf_theme'] );
    $iaf_opts['color']                  = sanitize_hex_color( $_POST['iaf_custom_color'] );

    $iaf_cpts    = get_post_types( array( '_builtin' => false ), 'objects' );
    foreach( $iaf_cpts as $cpt ) {
        $iaf_opts['share_'.$cpt->name]  = sanitize_text_field( $_POST['iaf_share_' . $cpt->name] );
    }

    if( update_option( 'iaf_social_share_opts', $iaf_opts ) ) {
        wp_redirect( admin_url( 'admin.php?page=iaf-social-share&status=1' ) );
        // echo 'OK';
    } else {
        wp_redirect( admin_url( 'admin.php?page=iaf-social-share&status=2' ) );
        // echo 'KO';
    }
}