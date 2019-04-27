jQuery(document).ready(function($) {
    $(window).resize(()=>$('.filter').removeClass('active'));
    function toggleMenu(){
        if($('.active .filter-icon').length>0){
            $('.filter').removeClass('active');
        }else{
            $('.filter').addClass('active');
        }
    }
    $('.filter-icon').click(toggleMenu);
    $('.filter-content>li').click(function(){
        let indexFilter = "#" + $(this).attr('data-sort');
        $('.filter-content>li').each(function(el){
            $(this).removeClass('active')
        });
        $(this).addClass('active');
        console.log(indexFilter);
        let listFilter = $('.filter-item');
        listFilter.each(function(el){
           $(this).removeClass('active');
            $('.filter-content>')
        });
        $(indexFilter).addClass('active ');
        toggleMenu();
    });
    $(".slick-slider").slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        verticalSwiping: false,
        prevArrow:"<button class=\"btn btn-primary\"><img src=\"./images/arrow-prev.svg\" alt=\"Prev\">",
        nextArrow:"<button class=\"btn btn-primary\"><img src=\"./images/arrow-next.svg\" alt=\"Next\"></button>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })
    $(".slick-slider-1").slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        verticalSwiping: false,
        prevArrow:"<button class=\"btn btn-primary\"><img src=\"./images/arrow-prev.svg\" alt=\"Prev\">",
        nextArrow:"<button class=\"btn btn-primary\"><img src=\"./images/arrow-next.svg\" alt=\"Next\"></button>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })
});