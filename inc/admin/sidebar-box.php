<div class="iaf-side-content">
        
    <div class="iaf-title">
        <h2><?php esc_html_e( 'Post Types', 'iaf-social-share' ); ?></h2>
        <p><?php esc_html_e( 'Choose the pot types where the share buttons will be displayed.', 'iaf-social-share' ); ?></p>
    </div>

    <div class="iaf-content">

        <div class="iaf-form-row">
            <div class="iaf-form-label">
                <?php esc_html_e( 'Article', 'iaf-social-share' ); ?>
            </div><div class="iaf-form-control">
                <div class="iaf-form-input">
                    <input type="radio" id="iaf_share_post_1" name="iaf_share_post"
                        <?php echo $iaf_opts['share_post'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                    <label for="iaf_share_post_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                </div>
                <div class="iaf-form-input">
                    <input type="radio" id="iaf_share_post_2" name="iaf_share_post" 
                        <?php echo $iaf_opts['share_post'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                    <label for="iaf_share_post_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                </div>
            </div>
        </div>

        <div class="iaf-form-row">
            <div class="iaf-form-label">
                <?php esc_html_e( 'Page', 'iaf-social-share' ); ?>
            </div><div class="iaf-form-control">
                <div class="iaf-form-input">
                    <input type="radio" id="iaf_share_page_1" name="iaf_share_page" 
                        <?php echo $iaf_opts['share_page'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                    <label for="iaf_share_page_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                </div>

                <div class="iaf-form-input">
                    <input type="radio" id="iaf_share_page_2" name="iaf_share_page" 
                    <?php echo $iaf_opts['share_page'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                    <label for="iaf_share_page_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                </div>
            </div>
        </div>

        <?php
        $args           = [
            'public'    => true,
            '_builtin'  => false,
        ];
        $iaf_cpts       = get_post_types( $args, 'objects' );
        
        foreach( $iaf_cpts as $cpt ) {
            ?>
            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php esc_html_e( $cpt->label ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_share_<?php echo $cpt->name; ?>_1" name="iaf_share_<?php echo $cpt->name; ?>"
                            <?php echo $iaf_opts['share_' . $cpt->name] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_share_<?php echo $cpt->name; ?>_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_share_<?php echo $cpt->name; ?>_2" name="iaf_share_<?php echo $cpt->name; ?>" 
                            <?php echo $iaf_opts['share_' . $cpt->name] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_share_<?php echo $cpt->name; ?>_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

    <div class="iaf-title">
        <h2><?php esc_html_e( 'Layout', 'iaf-social-share' ); ?></h2>
        <p><?php esc_html_e( 'Customize the layout of the share buttons.', 'iaf-social-share' ); ?></p>
    </div>

    <div class="iaf-content">

        <div class="iaf-form-row">  
            <div class="iaf-form-label">
                <?php esc_html_e( 'Style', 'iaf-social-share' ); ?>
            </div><div class="iaf-form-control">
                <div class="iaf-form-input">
                    <select id="iaf_display" name="iaf_display">
                        <option value="text_and_icon"
                            <?php echo $iaf_opts['display'] == 'icon_and_text' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Text and icon', 'iaf-social-share' ); ?></option>
                        <option value="text_only"
                            <?php echo $iaf_opts['display'] == 'text_only' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Text only', 'iaf-social-share' ); ?></option>
                        <option value="icon_only"
                            <?php echo $iaf_opts['display'] == 'icon_only' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Icon only', 'iaf-social-share' ); ?></option>
                    </select>
                </div>
            </div>
        </div>

        <div class="iaf-form-row">  
            <div class="iaf-form-label">
                <?php esc_html_e( 'Mobile settings', 'iaf-social-share' ); ?>
            </div><div class="iaf-form-control">
                <div class="iaf-form-input">
                    <select id="iaf_mobile" name="iaf_mobile">
                        <option value="hide_text"
                            <?php echo $iaf_opts['mobile'] == 'hide_text' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Hide text', 'iaf-social-share' ); ?></option>
                        <option value="hide_icon"
                            <?php echo $iaf_opts['mobile'] == 'hide_icon' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Hide icon', 'iaf-social-share' ); ?></option>
                        <option value="show_all"
                            <?php echo $iaf_opts['mobile'] == 'icon_text' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Show text and icon', 'iaf-social-share' ); ?></option>
                    </select>
                </div>
            </div>
        </div>

        <div class="iaf-form-row">
            <div class="iaf-form-label">
                <?php esc_html_e( 'Theme', 'iaf-social-share' ); ?>
            </div><div class="iaf-form-control">
                <div class="iaf-form-input">
                    <select id="iaf_theme" name="iaf_theme">
                        <option value="default"
                            <?php echo $iaf_opts['theme'] == 'default' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Default', 'iaf-social-share' ); ?></option>
                        <option value="dark"
                            <?php echo $iaf_opts['theme'] == 'dark' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Dark', 'iaf-social-share' ); ?></option>
                        <option value="light"
                            <?php echo $iaf_opts['theme'] == 'light' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Light', 'iaf-social-share' ); ?></option>
                        <option value="custom"
                            <?php echo $iaf_opts['theme'] == 'custom' ? 'SELECTED' : '' ?>><?php esc_html_e( 'Custom', 'iaf-social-share' ); ?></option>
                    </select>
                </div>
                
                <div class="iaf-form-input" id="iaf-color-input">
                    <input type="text" name="iaf_custom_color" value="<?php echo $iaf_opts['color']; ?>" class="iaf-custom-color" data-default-color="#000000" />
                </div>
            </div>
        </div>

    </div>
    <div class="iaf-footer"></div>
</div>

<div class="iaf-side-content iaf-social" style="margin-top: 15px;">
    <div class="iaf-title" style="border-bottom: none;">
        <h4><?php esc_html_e( 'Follow me on social media', 'iaf-social-share' ); ?></h4>
    </div>

    <div class="iaf-footer-social">
        <a href="https://facebook.com/iamfotso" target="_blank" class="iaf-social-box iaf-facebook-link">
            <i class="fab fa-facebook"></i>
            <div class="iaf-social-label">fb.me/iamfotso</div>
        </a><a href="https://twitter.com/petit_ecolier" target="_blank" class="iaf-social-box iaf-twitter-link">
            <i class="fab fa-twitter"></i>
            <div class="iaf-social-label">@petit_ecolier</div>
        </a><a href="https://linkedin.com/in/fotso-fonkam/" target="_blank" class="iaf-social-box iaf-linkedin-link">
            <i class="fab fa-linkedin-in"></i>
            <div class="iaf-social-label">Fotso Fonkam</div>
        </a><a href="http://www.iamfotso.cm" target="_blank" class="iaf-social-box iaf-wordpress-link">
            <i class="fab fa-wordpress"></i>
            <div class="iaf-social-label">iamfotso.cm</div>
        </a>
    </div>
</div>