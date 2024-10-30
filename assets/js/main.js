(function($) {
    /* Display custom color field if theme value is 'custom' */

   $("#iaf-color-input").hide();

    if( $("#iaf_theme").val() == 'custom' ) {
        $("#iaf-color-input").show();
    } else {
        $("#iaf-color-input").hide();
    }

    $("#iaf_theme").on( 'change', function(){
        if( $("#iaf_theme").val() == 'custom' ){
            $("#iaf-color-input").show();
        } else {
            $("#iaf-color-input").hide();
        }
    });
})(jQuery);