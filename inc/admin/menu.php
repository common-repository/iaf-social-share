<?php
function iaf_admin_menu(){
    add_menu_page( 'IAF Social Share', 'IAF Social Share', 'manage_options', 'iaf-social-share', 'iaf_social_share_func', 'dashicons-share-alt', 30 );
}

function iaf_social_share_func(){
    // Retrieve plugin options
    $iaf_opts           = get_option( 'iaf_social_share_opts' );
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'IAF Social Share Settings', 'iaf-social-share' ); ?></h1>
        <?php
        if( isset( $_GET['status'] ) && $_GET['status'] == 1 ) {
            ?>
            <div class="notice notice-success inline is-dismissible">
                <p><?php esc_html_e( 'Your settings were successfully saved', 'iaf-social-share' ); ?></p>
            </div>
            <?php
        } elseif( isset( $_GET['status'] ) && $_GET['status'] == 2 ) {
            ?>
            <div class="notice notice-error inline is-dismissible">
                <p><?php esc_html_e( 'An error occured while saving your settings. Check that everything is correct and try again', 'iaf-social-share' ); ?></p>
            </div>
            <?php
        }
        ?>
        <form method="post" action="admin-post.php">
            <?php wp_nonce_field( 'iaf_options_verify' ); ?>
            <input type="hidden" name="action" value="iaf_save_options">
            
            <p>
                <?php esc_html_e( 'Use IAF Social Share plugin to display share buttons on your articles and pages.', 'iaf-social-share' ); ?>
            </p>

            <div class="iaf-row">
                <div class="iaf-col iaf-main-col">
                    <?php
                    include( 'settings-form.php' );
                    ?>
                </div><div class="iaf-col iaf-side-col">
                    <?php
                    include( 'sidebar-box.php' );
                    ?>
                </div>
            </div>
        </div>
        </form>
    <?php
}
?>