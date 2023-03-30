// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$("#client-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
});

$('button.navi-link').on('click', function () {
    $(this).parents('.tab-navigation').find('button.navi-link').removeClass('active');
    $(this).addClass('active');

    let tabId = $(this).attr('for');

    $(this).parents('.custom_tab').find('.tab-content .custom_tab_content').removeClass('active').hide();
    $(`#${tabId}`).fadeIn();
});

function initNavigationSlick() {
    if ($(document).width() <= 1200) {
        $('.tab-navigation').slick({
            slidesToShow: 1,
            slidesToScroll: true,
            variableWidth: true,
            arrows: false,
            infinite: false
        });
    }
}

initNavigationSlick();

$(window).on('resize', function () { initNavigationSlick() });