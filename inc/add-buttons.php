<?php
function iaf_add_share_buttons( $content ){
    global $post;
    $iaf_opts               = get_option( 'iaf_social_share_opts' );

    $share_posts            = $iaf_opts['share_post'] == 'show' ? 'post' : '';
    $share_pages            = $iaf_opts['share_page'] == 'show' ? 'page' : '';

    $share_post_types       = [ $share_posts, $share_pages  ];

    $iaf_cpts               = get_post_types( array( '_builtin' => false ), 'objects' );
    foreach( $iaf_cpts as $cpt ) {
        if( $iaf_opts['share_' . $cpt->name] == 'show' ) {
            array_push( $share_post_types, $cpt->name );
        }
    }

    if( !is_singular( $share_post_types ) ){
        return $content;
    }

    $share_buttons          = file_get_contents( 'share-template.php', true );
    $twitter_via            = !empty($iaf_opts['twitter_handle']) ? '&via='. $iaf_opts['twitter_handle'] : '';
    
    $facebook               = $iaf_opts['facebook'] == 'show' ? 
                            '<div>
                                <a href="'. esc_url( 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(), 'iaf-social-share' ). '" target="_blank" class="js-share-facebook-link">
                                    <i class="iaf-icon fab fa-facebook-f"></i>
                                    <span class="iaf-text"> '. esc_html( 'Facebook', 'iaf-social-share' ) .'</span>
                                </a>
                            </div>' : '';

    $twitter                = $iaf_opts['twitter'] == 'show' ? 
                            '<div>
                                <a href="'. esc_url( 'https://twitter.com/intent/tweet?text=' . urlencode( get_the_title() ) . '&url='. get_the_permalink() . $twitter_via, 'iaf-social-share' ) .'" data-size="large" class="js-share-twitter-link">
                                    <i class="iaf-icon fab fa-twitter"></i>
                                    <span class="iaf-text"> '. esc_html( 'Twitter', 'iaf-social-share' ) .'</span>
                                </a>
                            </div>' : '';

    $linkedin               = $iaf_opts['linkedin'] == 'show' ? 
                            '<div>
                                <a href="'. esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='. get_the_permalink() .'&title='. urlencode( get_the_title() ) .'&source='. get_the_permalink(), 'iaf-social-share' ) .'" target="_blank" class="js-share-linkedin-link">
                                    <i class="iaf-icon fab fa-linkedin-in"></i>
                                    <span class="iaf-text"> '. esc_html( 'LinkedIn', 'iaf-social-share' ) .'</span>
                                </a>
                            </div>' : '';
    
    $whatsapp               = $iaf_opts['whatsapp'] == 'show' ? 
                            '<div>
                                <a href="whatsapp://send?text='. get_the_permalink() .'" target="_blank" class="js-share-whatsapp-link">
                                    <i class="iaf-icon fab fa-whatsapp"></i>
                                    <span class="iaf-text"> '. esc_html( 'WhatsApp', 'iaf-social-share' ) .'</span>
                                </a>
                            </div>' : '';

    $telegram               = $iaf_opts['telegram'] == 'show' ? 
                            '<div>
                                <a href="'. esc_url( 'https://t.me/share/url?url='. get_the_permalink() .'&text='. get_the_title(), 'iaf-social-share' ) .'" target="_blank" class="js-share-telegram-link">
                                    <i class="iaf-icon fab fa-telegram-plane"></i>
                                    <span class="iaf-text"> '. esc_html( 'Telegram', 'iaf-social-share' ) .'</span>
                                </a>
                            </div>' : '';

    $share_buttons          = str_replace( 'FACEBOOK_BUTTON',   $facebook,  $share_buttons );
    $share_buttons          = str_replace( 'TWITTER_BUTTON',    $twitter,   $share_buttons );
    $share_buttons          = str_replace( 'LINKEDIN_BUTTON',   $linkedin,  $share_buttons );
    $share_buttons          = str_replace( 'TELEGRAM_BUTTON',   $telegram,  $share_buttons );
    $share_buttons          = str_replace( 'WHATSAPP_BUTTON',   $whatsapp,  $share_buttons );

    $show_before            = $iaf_opts['before_content']   == 'show' ? $share_buttons : '';
    $show_after             = $iaf_opts['after_content']    == 'show' ? $share_buttons : '';

    return $show_before . $content . $show_after;
}