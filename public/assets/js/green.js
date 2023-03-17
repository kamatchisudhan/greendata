$(document).ready(function() {

    /*ON SCROLL ANMATE ADDCLASS BASED ON VIEWPORT STARTS*/
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                //$element.removeClass('in-view');
            }
        });
    }

    //if ($(window).width() >= 1025) {
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    //}
    /*ON SCROLL ANMATE ADDCLASS BASED ON VIEWPORT END*/


    var $divs = $(".zbanner-map-container > .zmap-points-container");
    var interval;
    var $ds;

    function randomClass() {
        interval = setInterval(function() {
            $ds = $divs.not(".active");
            $ds.eq(Math.floor(Math.random() * $ds.length)).addClass('active').siblings().removeClass('active');
            if ($ds.length === 1) {
                clearInterval(interval);
            }
        }, 5000);
    }
    randomClass();

    $(".zmap-points-container").mouseenter(function() {
        $divs.removeClass('active');
        clearInterval(interval);
        //randomClass();

        $(this).addClass('active');
    });
    $(".zmap-points-container").mouseleave(function() {
        /*$divs.eq(Math.floor(Math.random() * $divs.length)).addClass('active').siblings().removeClass('active');
        clearInterval(interval);
        randomClass();*/

    });



    $('.section-wrapper').each(function() {
        if ($(window).width() <= 767) {
            $(this).find('.section-logo').insertBefore($(this).find('.section-main'));
        }else{
            $(this).find('.section-logo').insertAfter($(this).find('.section-main'));
        }
    });


    $(window).resize(function(){
        $('.section-wrapper').each(function() {
            if ($(window).width() <= 767) {
                $(this).find('.section-logo').insertBefore($(this).find('.section-main'));
            }else{
                $(this).find('.section-logo').insertAfter($(this).find('.section-main'));
            }
        });
    });

    var counter = 0;
    var brandoffset = $(window).height() + 90;
    //var webnmslogo_offset = $('.webnms .section-logo').offset().top;
    var webnmslogo_offset = $('.qntrl .section-logo').offset().top;
    $(window).scroll(function() {
        var scrolloffset = $(window).scrollTop();

        //console.log(brandoffset ,scrolloffset)
        if (brandoffset <= scrolloffset) {
            $('.zoho h2').addClass('fixed');
            if (webnmslogo_offset >= scrolloffset - 10) {
                $('.zoho h2').addClass('fixed');
            } else {
                $('.zoho h2').removeClass('fixed');
            }
        } else {
            $('.zoho h2').removeClass('fixed');
        }

        /*** customer count increase animation ***/
        if ($('.zcount').hasClass('in-view')) {
            $('.zcount').each(function() {
                if (counter === 0) {
                    $(this).prop('Counter', 10).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                }
                counter = counter + 1;
            });
        }
        /*** customer count increase animation ***/

    });

    if ($(window).width() >= 1025) {
        // $('.banner').height($(window).height());
    }

    $('.bannernav li').on('click', function() {
        var thisLink = $(this).attr('data-href');
        $('body, html').animate({ scrollTop: $('div[data-id="' + thisLink + '"]').offset().top }, 800);
    });

    $('.copy-right-year').text(new Date().getFullYear());
    $(".news-wrapper").html("");

    var URL = "https://www.zohowebstatic.com/sites/default/files/json/press-data-list.json";
    $.getJSON(URL, function(d) {
        var data1 = d.pressLists[0];
        var data2 = d.pressLists[1];
        var slide1 = '<div class="slide-item"><a href="https://www.zoho.com/' + data1.link + '" target="_blank"><p class="date-info">' + data1.date + '</p><p>' + data1.title + '</p></a></div>';
        var slide4 = '<div class="slide-item"><a href="https://www.zoho.com/' + data2.link + '" target="_blank"><p class="date-info">' + data2.date + '</p><p>' + data2.title + '</p></a></div>'
       


        var URL1 = "js/me-news.json";
        $.getJSON(URL1, function(e) {
            var data1 = e.pressLists[0];
            var data2 = e.pressLists[1];
            var slide2 = '<div class="slide-item"><a href="' + data1.link + '" target="_blank"><p class="date-info">' + data1.date + '</p><p>' + data1.title + '</p></a></div>';
            var slide5 = '<div class="slide-item"><a href="' + data2.link + '" target="_blank"><p class="date-info">' + data2.date + '</p><p>' + data2.title + '</p></a></div>'

            var URL2 = "js/nms-news.json";
           // $.getJSON(URL2, function(f) {
                //var data1 = f.pressLists[0];
                //var data2 = f.pressLists[1];
                //var slide3 = '<div class="slide-item"><a href="' + data1.link + '" target="_blank"><p class="date-info">' + data1.date + '</p><p>' + data1.title + '</p></a></div>';
                //var slide6 = '<div class="slide-item"><a href="' + data2.link + '" target="_blank"><p class="date-info">' + data2.date + '</p><p>' + data2.title + '</p></a></div>'
                 //$(".news-wrapper").append(slide1 + slide2 + slide3 + slide4 + slide5 + slide6);
                 $(".news-wrapper").append(slide1 + slide2 + slide4 + slide5 );

                $(".news-wrapper").slick({
                    dots: false,
                    slidesToShow: 1,
                    infinite: false,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    fade: true,
                    arrows: true,
                });

            //});

        });
    });

});