/* 
 * This file is used for some custom changes.
 */
(function($) {
    $(document).ready(function() {
        var base_url = Drupal.settings.kh_home.baseUrl;
        $('#region-branding-logo img').click(function() {
            window.location.href = base_url;  
        });
        /*****Redirect the respective page when user click standard calculation tools and Resources icon on home page.*****/
        $('.zone-postscript-wrapper .grid-4.region-postscript-first h2.block-title').click(function() {
            window.location.href = base_url + '/standard-guidance';  
        });
        $('.zone-postscript-wrapper .grid-4.region-postscript-second h2.block-title').click(function() {
            window.location.href = base_url + '/calculation-tools';  
        });
        $('.zone-postscript-wrapper .grid-4.region-postscript-third h2.block-title').click(function() {
            window.location.href = base_url + '/resources';  
        });
        /*******When user click on search icon in mobile view********/
        $('#search-show').click(function() {
            window.location.href = base_url + '/search/node/';  
        });
        /* Adjustments for Safari on Mac */
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Mac') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        // console.log('Safari on Mac detected, applying class...');
        $('body').addClass('safari-mac'); // provide a class for the safari-mac specific css to filter with
    }
    });
})(jQuery);
