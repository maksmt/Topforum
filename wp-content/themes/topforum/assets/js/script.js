let unlock = true;


//Menu
let iconMenu = document.querySelector(".icon-menu");
if (iconMenu != null) {
    let delay = 500;
    let menuBody = document.querySelector(".header__menu");
    iconMenu.addEventListener("click", function (e) {
        if (unlock) {
            body_lock(delay);
            iconMenu.classList.toggle("_active");
            menuBody.classList.toggle("_active");
        }
    });
};
function menu_close() {
    let iconMenu = document.querySelector(".icon-menu");
    let menuBody = document.querySelector(".header__menu");
    iconMenu.classList.remove("_active");
    menuBody.classList.remove("_active");
}
//=================
//BodyLock
function body_lock(delay) {
    let body = document.querySelector("body");
    if (body.classList.contains('_lock')) {
        body_lock_remove(delay);
    } else {
        body_lock_add(delay);
    }
}
function body_lock_remove(delay) {
    let body = document.querySelector("body");
    if (unlock) {
        let lock_padding = document.querySelectorAll("._lp");
        setTimeout(() => {
            for (let index = 0; index < lock_padding.length; index++) {
                const el = lock_padding[index];
                el.style.paddingRight = '0px';
            }
            body.style.paddingRight = '0px';
            body.classList.remove("_lock");
        }, delay);

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, delay);
    }
}
function body_lock_add(delay) {
    let body = document.querySelector("body");
    if (unlock) {
        let lock_padding = document.querySelectorAll("._lp");
        for (let index = 0; index < lock_padding.length; index++) {
            const el = lock_padding[index];
            el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
        }
        body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
        body.classList.add("_lock");

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, delay);
    }
}
$(document).ready(function () {
    $('.banner__slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 1800,
        fade: true,
    });
});


$(document).ready(function () {
    $('.reviews__slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 1400,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 992.98,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 450,
            settings: {
                slidesToShow: 1,

                arrows: false,
                dots: true,
            }

        }
        ]
    });

});
$(document).ready(function () {
    $('.clients__slider').slick({
        arrows: true,
        autoplay: true,
        slidesToShow: 6,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 1060,
                settings: {
                    slidesToShow: 4,
                }

            }, {
                breakpoint: 790,
                settings: {
                    slidesToShow: 3,
                }

            }, {
                breakpoint: 660,
                settings: {
                    slidesToShow: 2,
                }

            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }

            }
        ]
    });

});


$('.open-popup').click(function (e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
    $('html').addClass('no-scroll');
});

$('.close').click(function () {
    $('.popup-bg').fadeOut(800);
    $('html').removeClass('no-scroll');
});




