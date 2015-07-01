;(function( $, window, document, undefined ){
    $(document).ready(function(){
        var $container = $('#tfa-masnory');
        if($container.length){
            // initialize
            $container.imagesLoaded( function() {
                $container.masonry({
                    columnWidth: '.tfa-masnory-item',
                    itemSelector: '.tfa-masnory-item'
                });
            });
        }
        
        var $owl = $('#tfa-owl');
        if($owl.length){
            $owl.owlCarousel({
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true
            });
        }
        var menu_class = '.navbar-toggle',
            trigger_menu = $(menu_class);
        if(trigger_menu.length){
            var jPM = $.jPanelMenu({
                menu: '#tfa-main-nav',
                trigger: menu_class
            });
            jPM.on();
        }
    });
})( jQuery, window , document );


jQuery(document).ready(function($) {
	
	var htmlvar = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-5754004360155485" data-ad-slot="8270948051"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
	 $(".views-field-nothing span").html(htmlvar);

});