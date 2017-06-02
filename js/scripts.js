/**
 * Created by user on 19.04.2017.
 */

$(document).ready(function () {
    
    //var iframes = $('.lazy');// iframes.each(function() {//            var src = $(this).attr('src');//            $(this).data('src', src).attr('src', '');//        });//    var heightPrices = $('.prices').offset().top;//    var isLoad = false;////    $(window).scroll(function () {//        var winTop = $(window).scrollTop();//        if (!isLoad) {//            //                alert();//            if (winTop >= heightPrices) {//                iframes.each(function () {//                    iframes.attr('src', function () {//                        return $(this).data('src');//                    });//                });//            }//            isLoad = true;//        }//    });
    
    setInterval(function () {
        setTimeout(function () {
            $(".scroll-down .scroll-down__point").removeClass("active");
        }, 1000);
        $(".scroll-down .scroll-down__point").addClass("active");
    }, 2000);

    //sticky header
    var height = $('.slider').outerHeight() - $('.header').outerHeight();
    $(window).scroll(function () {
        var winTop = $(window).scrollTop();
        if (winTop >= height) {
            $("body").find('.header').addClass("sticky");
        } else {
            $("body").find('.header').removeClass("sticky");
        }
    });
    
    //set file name for type="file"
    $('body').on('change', '.inputFile', function() {
        var file = $(this).val();
        file = file.replace(/\\/g, "/").split('/').pop();
        $('label[for=inputFile]').find('span').html(file);
    });

    //open first tab
    document.getElementById("defaultOpenConstructor").click();
    document.getElementById("defaultOpenEffect").click();

    $('.testimonials__wrapper__testimonials').owlCarousel({
        margin: 20,
        nav: true,
        loop: true,
        navText: ['<img src="img/prev-testimo.png">', '<img src="img/next-testimo.png">'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    $('.main-slider').owlCarousel({
        nav: true,
        navText: ['<img src="img/prev-slider.png">', '<img src="img/next-slider.png">'],
        items: 1,
        loop: true
    })

    //maskedinput
    $(".form-telephone").mask("+7(999) 999-9999", {
        placeholder: ""
    });

    //colorbox
    $(".group1, .group2, .group3, .group4, .group6, .hided-colorbox > a").colorbox({
        transition: "fade",
        innerWidth: 60 + '%',
        innerHeight: 80 + '%',
        current: '{current} / {total}',
        close: '<svg style="width: 20px;stroke: #fff;stroke-width: 3px;" viewBox="0 0 30 40" preserveAspectRatio="xMidYMid meet"><g><path d="m 0,0 30,30 m 0,-30 -30,30"></path></g></svg>',
        previous: '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="25" style="stroke: #fff;fill: white;" viewBox="0 0 13 25" style="display: inline;"><path d="M331.01,1428.99l-10.324-12.49,10.324-12.49h-2.695L317.99,1416.5l10.325,12.49h2.695Z" transform="translate(-318 -1404)"></path></svg>',
        next: '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="25" style="stroke: #fff; fill: white;" viewBox="0 0 13 25" style="display: inline;"><path d="M1606.99,1428.99l10.32-12.49-10.32-12.49h2.69l10.33,12.49-10.33,12.49h-2.69Z" transform="translate(-1607 -1404)"></path></svg>'
    });
    $('.group1').colorbox({rel: 'group1'});
    $('.group2').colorbox({rel: 'group2'});
    $('.group3').colorbox({rel: 'group3'});
    $('.group4').colorbox({rel: 'group4'});
    $('.group6').colorbox({rel: 'group6'});
    

    //when i "click" on the image with a class of "circle1" it opens the "example1" group
    $('.foto-na-holste').click(function () {
        $("a[rel='foto-na-holste']").colorbox({
            rel: 'foto-na-holste',
            open: 'true'
        });
    });
    
    $('.fotomontaj-na-holste').click(function () {
        $("a[rel='fotomontaj-na-holste']").colorbox({
            rel: 'fotomontaj-na-holste',
            open: 'true'
        });
    });
    
    $('.fotokollaj-na-holste').click(function () {
        $("a[rel='fotokollaj-na-holste']").colorbox({
            rel: 'fotokollaj-na-holste',
            open: 'true'
        });
    });
    
    $('.holst-interier').click(function () {
        $("a[rel='holst-interier']").colorbox({
            rel: 'holst-interier',
            open: 'true'
        });
    });
    
    $('.holst-dlya-semyi').click(function () {
        $("a[rel='holst-dlya-semyi']").colorbox({
            rel: 'holst-dlya-semyiv',
            open: 'true'
        });
    });
    
    $('.modul-kartiny').click(function () {
        $("a[rel='modul-kartiny']").colorbox({
            rel: 'modul-kartiny',
            open: 'true'
        });
    });
    
    $('.holst-v-podarok').click(function () {
        $("a[rel='holst-v-podarok']").colorbox({
            rel: 'holst-v-podarok',
            open: 'true'
        });
    });
    
    $('.portret-na-holste').click(function () {
        $("a[rel='portret-na-holste']").colorbox({
            rel: 'portret-na-holste',
            open: 'true'
        });
    });
    
    $('.obrazcy-matrialov').click(function () {
        $("a[rel='obrazcy-matrialov']").colorbox({
            rel: 'obrazcy-matrialov',
            open: 'true'
        });
    });

    //modal-form
    $('.header__telephone__button, .openmodal').on('click',function () {
        openModal($('.modal-form.modal:not(.modal-testimonial)'));
    });
    
    $('.how-we-work__wrapper__step__text a').on('click',function () {
        openModal($('.modal-payment'));
    });
    
    $('#overlay, .close-modal').on('click',function () {
        closeModal();
    });
    
    
    function openModal(element) {
        $('#overlay').fadeIn(400,
            function () {
                element
                    .css('display', 'block')
                    .animate({
                        opacity: 1,
                        top: '50%'
                    }, 200);
            });
    }
    
    function closeModal() {
        $('.modal')
            .animate({
                    opacity: 0,
                    top: '45%'
                }, 200,
                function () {
                    $(this).css('display', 'none');
                    $('#overlay').fadeOut(400);
                }
        );
    }

    //navigation
    // Cache selectors
    var lastId,
        topMenu = $("nav"),
        topMenuHeight = $('header').outerHeight() - 30,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });
    
    // Bind click handler to slider items
    // so we can get a fancy scroll animation
    var sliderItems = $('.slider .owl-stage').find("a");
    sliderItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });
        
    // Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });

    //ajax email
    $('form').submit(function (e) {
        var dataAjax = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: 'http://canpi.ru/mail.php', //Change
            data: dataAjax,
            dataType: 'html',
            processData: false,
            contentType: false,
            success: function (suc) {
                console.log(suc);
                $('form').fadeOut();
                $('.after-send').delay(400).fadeIn();
                setTimeout(function () {
                    // Done Functions
                    $('form').trigger("reset");
                    $('.after-send').fadeOut();
                    $('form').delay(400).fadeIn();
                }, 5000);
            }
        });
        return false;
    });

    //burger
    $('#nav-icon4').click(function () {
        $(this).toggleClass('open');
        $('.header__nav').toggleClass('open');
    });

    if (screen.width > 560) {
        var headerHeight = $('header').outerHeight();
        $('.slider .wrapper .main-slider__left').css('height', '100vh').css('height', '-=' + headerHeight + 'px');
    }
});

//vertical tabs
function openEffect(evt, effectName) {
    openTab (evt, effectName, "effects__wrapper__tabs-block__tab-content", "effects__wrapper__tabs-block__tabs__tab");
}

//tabs constructor
function openConstructor(evt, effectName) {
    openTab (evt, effectName, "constructor__wrapper__content", "constructor__tabs__tab");
}

function openTab (evt, effectName, elementTabContent, elementTabLinks) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName(elementTabContent);
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName(elementTabLinks);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(effectName).style.display = "flex";
    evt.currentTarget.className += " active";
}