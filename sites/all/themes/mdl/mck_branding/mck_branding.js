
(function($){
    Drupal.behaviors.mck_branding = {
        attach: function (context, settings) {
             $(document).ready(function() {

                // branding mouseover
                $('.linksUL li, .externalLink, .downloadLink, .chevronLink').bind('mouseover mouseout', function(e){
                    if(e.type == 'mouseover') {
                        $(this).addClass('hover');
                    }
                    if(e.type == 'mouseout') {
                        $(this).removeClass('hover');
                    }
                });
                
            });
        } 
    }; 
})(jQuery);