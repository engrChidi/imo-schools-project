/**
 * Created by Oluyemi on 5/17/17.
 */

$(document).ready(function(){
    $('.auth_form').on('submit', function(){
        $('.auth_button').html('Processing...');
    });
});


function previewImage(){

}

// Scroll to div

$(document).on('click', 'a[href^="#"]', function(e){

    //target element id
    var id = $(this).attr('href');

    //target element
    var $id = $(id);

    if($id.length === 0 ){
        return;
    }

    // prevent standard hash navigation
    e.preventDefault();

    //top position relative to the document
    var pos = $id.offset().top;

    //animated top scrolling
    $('body, html').animate({scrollTop: pos}, 2000);
});



