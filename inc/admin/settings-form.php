    <div class="iaf-main-content">
    
        <div class="iaf-title">
            <h2><?php esc_html_e( 'Social Media', 'iaf-social-share' ); ?></h2>
            <p><?php esc_html_e( 'Select the social media that you would like to use', 'iaf-social-share' ); ?></p>
        </div>

        <div class="iaf-content">
            <div class="iaf-form-row">
                <div class="iaf-form-label">
                <?php esc_html_e( 'Facebook', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_facebook_1" name="iaf_facebook"
                            <?php echo $iaf_opts['facebook'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_facebook_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_facebook_2" name="iaf_facebook" 
                            <?php echo $iaf_opts['facebook'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_facebook_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php esc_html_e( 'Twitter', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_twitter_1" name="iaf_twitter" 
                            <?php echo $iaf_opts['twitter'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_twitter_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_twitter_2" name="iaf_twitter" 
                        <?php echo $iaf_opts['twitter'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_twitter_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>

                    <div class="iaf-form-input" id="iaf-twitter-handle">
                        <label for="iaf_twitter_2">@</label>
                        <input type="text" id="iaf_twitter_handle" name="iaf_twitter_handle" 
                        value="<?php echo $iaf_opts['twitter_handle']; ?>" />
                    </div>
                </div>
            </div>

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php esc_html_e( 'LinkedIn', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_linkedin_1" name="iaf_linkedin"
                            <?php echo $iaf_opts['linkedin'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_linkedin_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_linkedin_2" name="iaf_linkedin" 
                            <?php echo $iaf_opts['linkedin'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_linkedin_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php esc_html_e( 'WhatsApp', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_whatsapp_1" name="iaf_whatsapp"
                            <?php echo $iaf_opts['whatsapp'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_whatsapp_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_whatsapp_2" name="iaf_whatsapp" 
                            <?php echo $iaf_opts['whatsapp'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_whatsapp_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php esc_html_e( 'Telegram', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_telegram_1" name="iaf_telegram"
                            <?php echo $iaf_opts['telegram'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_telegram_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_telegram_2" name="iaf_telegram" 
                            <?php echo $iaf_opts['telegram'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_telegram_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>
                        
        </div>

        <div class="iaf-title">
            <h2><?php esc_html_e( 'Positions', 'iaf-social-share' ); ?></h2>
            <p><?php esc_html_e( 'Indicate where the share buttons will appear on your website.', 'iaf-social-share' ); ?></p>
        </div>

        <div class="iaf-content">

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php _e( 'Before Content', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_before_content_1" name="iaf_before_content"
                            <?php echo $iaf_opts['before_content'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_before_content_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_before_content_2" name="iaf_before_content" 
                            <?php echo $iaf_opts['before_content'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_facebook_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>

            <div class="iaf-form-row">
                <div class="iaf-form-label">
                    <?php _e( 'After Content', 'iaf-social-share' ); ?>
                </div><div class="iaf-form-control">
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_after_content_1" name="iaf_after_content" 
                            <?php echo $iaf_opts['after_content'] == 'show' ? 'CHECKED' : '' ?> value="show" />
                        <label for="iaf_after_content_1"><?php _e( 'Show', 'iaf-social-share' ); ?></label>
                    </div>
                    <div class="iaf-form-input">
                        <input type="radio" id="iaf_after_content_2" name="iaf_after_content" 
                        <?php echo $iaf_opts['after_content'] == 'hide' ? 'CHECKED' : '' ?> value="hide" />
                        <label for="iaf_after_content_2"><?php _e( 'Hide', 'iaf-social-share' ); ?></label>
                    </div>
                </div>
            </div>
            
        </div>
    
        <div class="iaf-footer">
            <input type="submit" class="button button-primary" value="<?php esc_html_e( 'Save settings', 'iaf-social-share' ); ?>" />
        </div>
    </div>
