
/* On select change of country fetch states */
jQuery(document).on('change', '#form-country-selector', function(){  
    
    var country_id  = $(this).find(":selected").val();
   
    $.ajax({
        type: 'POST',
        url: base_url + '/custom/states.php',
        data: { country_id: country_id},
        success: function(resultData) {
            $("#form-state-selector" ).find('option').remove().end();
            $( "#form-state-selector" ).append(resultData);
        } 
    });

}); 


/* On select change of states fetch cities */
jQuery(document).on('change', '#form-state-selector', function(){  
    
    var state_id  = $(this).find(":selected").val();
    var country_id  = $("#form-country-selector").find(":selected").val();
   
    $.ajax({
        type: 'POST',
        url: base_url + '/custom/cities.php',
        data: { state_id: state_id, country_id: country_id},
        success: function(resultData) {
            $("#form-city-selector" ).find('option').remove().end();
            $("#form-city-selector" ).append(resultData);  
        }  
    });

});


/* On select change of country fetch states for search  */
jQuery(document).on('change', '#search-form-country-selector', function(){  
    
    var country_id  = $(this).find(":selected").val();
   
    $.ajax({
        type: 'POST',
        url: base_url + '/custom/states.php',
        data: { country_id: country_id},
        success: function(resultData) {
            $("#search-form-state-selector" ).find('option').remove().end();
            $("#search-form-state-selector" ).append(resultData);
        } 
    });

}); 


/* On select change of states fetch cities for search*/
jQuery(document).on('change', '#search-form-state-selector', function(){  
    
    var state_id  = $(this).find(":selected").val();
    var country_id  = $("#search-form-country-selector").find(":selected").val();
   
    $.ajax({
        type: 'POST',
        url: base_url + '/custom/cities.php',
        data: { state_id: state_id, country_id: country_id},
        success: function(resultData) {
            $("#search-form-city-selector" ).find('option').remove().end();
            $("#search-form-city-selector" ).append(resultData);  
        }  
    });

});

/* On select change of categories fetch subcategory */
jQuery(document).on('change', '#form-category-selector', function(){  
    
    var category_id  = $(this).find(":selected").val();
   
    $.ajax({
        type: 'POST',
        url: base_url + '/custom/sub-categories.php', 
        data: { category_id: category_id},
        success: function(resultData) {
            $("#form-subcategory-selector" ).find('option').remove().end();
            $("#form-subcategory-selector" ).append(resultData);  
        }  
    });

});


/* On media select change show media specific fields */
jQuery(document).on('change', '#form-media-type-selector', function(){  
    
    var form_media_type  = $(this).find(":selected").val();

    if(form_media_type == 'facebook'){
        $("#youtybe-url").hide();
        $("#product-media-upload").hide();
        $("#facebook-url").show();
    }else if(form_media_type == 'youtube'){
        $("#facebook-url").hide();
        $("#product-media-upload").hide();
        $("#youtybe-url").show();
    }else{
        $("#youtybe-url").hide();
        $("#facebook-url").hide();
        $("#product-media-upload").show();
    }
}); 


/* On media select change show media specific fields */
jQuery(document).on('change', '#form-marketplace-type-selector', function(){  
    
    var form_marketplace_type  = $(this).find(":selected").val();

    if(form_marketplace_type == 'product'){
        //$("#available-quantity").show();
        $("#product-size").show();
        $("#unit-of-quantity").show();
    }else{
        //$("#available-quantity").hide();
        $("#product-size").hide();
        $("#unit-of-quantity").hide();
    }
});



