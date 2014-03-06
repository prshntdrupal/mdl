(function($){
    Drupal.behaviors.otcs = {
        attach: function (context, settings) {

            $('a[href^="#"]').click(function(e){
                default_anchor_behaviour($(this));
                e.preventDefault();
            });	

            // search text changes
            var search_default = 'Search this site';
            $('.block-search .form-text').focus(function(){
                if($(this).val() == search_default) {
                    $(this).val('');
                }
            });
            $('#search-block-form .form-text').blur(function(){
                if($(this).val() == '' || $(this).val() == search_default) {
                    $(this).val(search_default);
                }
            });

        } // attach close here
    };
    // function for every on page anchire tag
    var default_anchor_behaviour = (function(obj) {
        var clicked_hash = $(obj).attr('href');
        var clicked_id = clicked_hash.split('#');
        if($("#" + clicked_id[1]).length == 1) {
            elem = $("#" + clicked_id[1]);
        } else {
            elem = $("a[name='" + clicked_id[1] + "']");
        }
        if(elem.selector != " ") {
            $('html, body').animate({
                scrollTop: elem.offset().top
            }, 1000);
        }
    });
    $(document).ready(function() {
        var count = $("ul#nice-menu-1 li").length;
        var full_width = $("ul#nice-menu-1").width();
        li_width = Math.round(full_width/count-2);
        $('ul#nice-menu-1 li').css('width',li_width);

         // bug in IE
        $('.block-menu_block .content:empty').parent().remove();
    });
    
})(jQuery);
