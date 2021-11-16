$('.header-mob-btn').on('click', function () {
    $('.header-mob-btn').toggleClass('open');
    $('.header-nav').toggleClass('show');
    $('body').toggleClass('shadow');
    $('body').toggleClass('overflow');
    $('html').toggleClass('overflow');
})


$('.header-mob-btn-in').on('click', function () {
    $('.header-mob-btn').removeClass('open');
    $('.header-nav').removeClass('show');
    $('body').removeClass('shadow');
    $('body').removeClass('overflow');
    $('html').removeClass('overflow');
})


$('.tabs-header button').on('click', function () {
    $('.tabs-header button').removeClass('active');
    $(this).addClass('active');
    const id = $(this).attr('data-index');
    $('.tabs-content .tab').fadeOut();
    $(id).fadeIn();
})


$('#myTab a').on('click', function (e) {
    e.preventDefault();
    $(this).tab('show');
})

window.addEventListener('load', () => {
    $('.tab-content .tab-pane').first().addClass('show active');
    $('.use_cases_container-tabs .tabs-block-item:first a').addClass('active');
});


window.addEventListener("load", () => {
    setTimeout(() => {
        gsap.registerPlugin(ScrollTrigger);
        const numb = document.querySelectorAll(".title-black-number");
        gsap.from(numb, {
            scrollTrigger: numb,
            textContent: 0,
            duration: 4,
            ease: "power1.in",
            snap: {textContent: 1},
            stagger: {
                each: 2.0,
            }
        });
    });
});



