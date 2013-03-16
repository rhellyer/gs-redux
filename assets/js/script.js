$(function(){

// Fancybox behavior when opening inline elements 
// this fixes the issue where they disappear from the page
// after the popup has closed

    $('.fancybox-inline').fancybox( 
        { afterClose: function( ){
            window.location.reload(false); 
        }
    });

// regular fancybox use with caption inside 
    
    $(".fancybox").fancybox({
    helpers : {
        title: {
                type: 'inside'
            }
        }
    });

// open search box

    $('.searchtrigger').click( function(){      
        $('.searchbox').show( 'fast');
    }); 

      $('.searchclose').click( function(){
       
        $('.searchbox').hide();
    })

// remove title attribute from images
// because kirby just uses the file name
    
    $('img').attr('title', '');

    $('.col img').hover(
        function(){
            var url = $(this).attr('src');
            url = url.replace("home1/", "home1/colored/");
            $(this).attr('src', url);
        }, 
        function(){
            var url = $(this).attr('src');
            url = url.replace("home1/colored/", "home1/");
            $(this).attr('src', url);
        }
    );


// show or hide bio 
    $('.biotrigger, .about-bios .name').click(function(){
        $(this).parent().siblings('.bio').toggle('fast');
        return false;
    })

    $('.about-bios .name').click(
        function(){
            var thebio = $(this).siblings('.bio');
            var isopen = thebio.is(':visible');

            console.log(thebio);
            console.log(isopen);
            console.log($('.about-bios .bio'));
            
            // close all
            $('.bio').hide();

            // if wasn't open, then open it
            if (!isopen) { 
                thebio.show('fast');
            }

            // $(this).siblings('.bio').toggle('fast');
        return false;
        }
    )

})