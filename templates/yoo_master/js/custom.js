jQuery(document).ready(function() {

    jQuery('input[placeholder], textarea[placeholder]').placeholder();

    jQuery( ".banket-link a" ).hover(

    function() {
      jQuery('.banket-link').toggleClass('banket-link-hover');      
    }
);

    jQuery( ".mobtn" ).click(function() {
        jQuery( ".order_popup").fadeToggle();
    });

    jQuery( ".pprs_close" ).click(function() {
        jQuery( ".order_popup").fadeToggle();
    });
    
});