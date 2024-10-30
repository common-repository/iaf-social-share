<?php
function iaf_add_opengraph(){
    global $post;
    ?>

    <!-- Opengraph tags inserted by IAF Social Share -->
    <meta property="og:title"               content="<?php the_title(); ?>" />
    <meta property="og:description"         content="<?php echo wp_html_excerpt( get_the_excerpt(), 200, '...' ); ?>" />
    <meta property="og:url"                 content="<?php the_permalink(); ?>" />
    <meta property="og:site_name"           content="<?php bloginfo( 'name' ); ?>" />
    <meta property="og:type"                content="article" />
    <meta property="og:image"               content="<?php the_post_thumbnail_url( 'full' ); ?>">
    <meta name="twitter:card"               content="summary_large_image" />
    <meta name="twitter:description"        content="<?php echo wp_html_excerpt( get_the_excerpt(), 200, '...' ); ?>" />
    <meta name="twitter:title"              content="<?php the_title(); ?>" />
    <meta property="twitter:image"          content="<?php the_post_thumbnail_url( 'full' ); ?>" />

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Load Twitter JavaScript -->
    <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
    
    <?php
}