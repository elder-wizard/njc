$(document).ready(function() {


    //header
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $('#header').addClass('fixed');
        } else {
            $('#header').removeClass('fixed');
        }
    });

    //slider
    $('.flexslider').flexslider({
        animation: "fade",
        directionNav: false,
    });

    $('.works-section').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
    });


     //blue background every second slide
     $( ".slides blockquote:odd" ).removeClass('quote');
     $( ".slides blockquote:odd" ).addClass('quote-bg');
});


$(document).ready(function () {

    //smoothscroll
    $('.main-btn-block a').on('click', function (e) {
        e.preventDefault;
       $(document).off("click");

        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-86
        }, 500, 'swing', function () {
            window.location.hash = target;
        });
    });
});

function onScroll(e){

    var scrollPos = $(document).scrollTop()+86;
    $('#navbarSupportedContent a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-86 <= scrollPos && refElement.position().top-86 + refElement.height() > scrollPos) {
            $('#navbarSupportedContent ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });

    
}


//padding for image container equal to menu height

$('.img-container').css("padding-top", $("#header").height());



