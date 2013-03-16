$(function(){
   
    $('.fancybox-inline').fancybox( 
        { afterClose: function( ){
            window.location.reload(false); 
        }
    });
    
    $(".fancybox").fancybox({
    helpers : {
        title: {
            type: 'inside'
        }
    }
});

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

// $('.col img').each( function () {
//             var url = $(this).attr('src');
//             url = url.replace("home1/", "home1/colored/");
//             $(this).attr('src', url);
// });
   

    // show / hide bio 
    $('.biotrigger, .about-bios .name').click(function(){
        $(this).parent().siblings('.bio').toggle('fast');
        return false;
    })
    $('.about-bios .name').click(function(){
        $(this).siblings('.bio').toggle('fast');
        return false;
    })

})