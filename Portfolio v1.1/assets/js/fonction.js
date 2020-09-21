// --- Carousel --- //

jQuery(document).ready(($) => {
    let interval;
    interval = setInterval(() => {
        moveRight();
    }, 3000);

    $('._slider').mouseover(() => {
        clearInterval(interval);
    });

    $('._slider').mouseleave(() => {
        interval = setInterval(() => {
            moveRight();
        }, 3000);
    });

    const slideCount = $('._slider ul li').length;
    const slideWidth = $('._slider ul li').width();
    const slideHeight = $('._slider ul li').height();
    const sliderUlWidth = slideCount * slideWidth;

    $('._slider').css({ width: slideWidth, height: slideHeight });

    $('._slider ul').css({ width: sliderUlWidth, marginLeft: -slideWidth });

    $('._slider ul li:last-child').prependTo('._slider ul');

    function moveLeft() {
        $('._slider ul').animate({
            left: +slideWidth,
        }, 200, () => {
            $('._slider ul li:last-child').prependTo('._slider ul');
            $('._slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('._slider ul').animate({
            left: -slideWidth,
        }, 200, () => {
            $('._slider ul li:first-child').appendTo('._slider ul');
            $('._slider ul').css('left', '');
        });
    };

    $('._slider_prev').click(() => {
        moveLeft();
        return false;
    });

    $('._slider_next').click(() => {
        moveRight();
        return false;
    });
});

// --- Effet de scroll de la barre de menu --- //

$(document).ready(() => {
    $('a[href^="#"]').on('click', function (evt) {
        evt.preventDefault();
        const target = $(this).attr('href');
        $('html, body')
            .stop()
            .animate({ scrollTop: $(target).offset().top }, 1000);
    });
});

// --- Bouton retour en haut --- //

const btn = $('#button');

$(window).scroll(() => {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});


// --- Menu qui défile --- //
// - Création d'un clone du menu, juste à côté de l'original. - //
$('.menu_haut').addClass('original').clone().insertAfter('.menu_haut')
    .addClass('cloned')
    .css('position', 'fixed')
    .css('top', '0')
    .css('margin-top', '0')
    .css('z-index', '500')
    .removeClass('original')
    .hide();

scrollIntervalID = setInterval(stickIt, 10);

function stickIt() {
    const orgElementPos = $('.original').offset();
    orgElementTop = orgElementPos.top;

    if ($(window).scrollTop() >= (orgElementTop)) {
        // Défilé au-delà de la position d'origine : affiche uniquement l’élément cloné.

        // L'élément cloné doit toujours avoir la même position et la même largeur que l'élément d'origine.
        orgElement = $('.original');
        coordsOrgElement = orgElement.offset();
        leftOrgElement = coordsOrgElement.left;
        widthOrgElement = orgElement.css('width');
        $('.cloned').css('left', `${leftOrgElement}px`).css('top', 0).css('width', widthOrgElement)
            .show();
        $('.original').css('visibility', 'hidden');
    } else {
        // Pas défilé devant le menu : montre seulement le menu original.
        $('.cloned').hide();
        $('.original').css('visibility', 'visible');
    }
}

// --- Class modal (Fiche projet) --- //
// -- Obtien le modal -- //
const modalparent = document.getElementsByClassName('modal_multi');

// -- Obtien le bouton qui ouvre le modal -- //
const modal_btn_multi = document.getElementsByClassName('myBtn_multi');

// -- Récupère l'élément <span> qui ferme le modal -- //
const span_close_multi = document.getElementsByClassName('close_multi');

// -- Lorsque l'utilisateur clique sur le bouton, ouvre le modal -- //
function setDataIndex() {
    for (i = 0; i < modal_btn_multi.length; i++) {
        modal_btn_multi[i].setAttribute('data-index', i);
        modalparent[i].setAttribute('data-index', i);
        span_close_multi[i].setAttribute('data-index', i);
    }
}

for (i = 0; i < modal_btn_multi.length; i++) {
    modal_btn_multi[i].onclick = function () {
        const ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = 'block';
    };

    // - Lorsque l'utilisateur clique sur <span> (x), ferme le modal - //
    span_close_multi[i].onclick = function () {
        const ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = 'none';
    };
}

window.onload = function () {
    setDataIndex();
};

window.onclick = function (event) {
    if (event.target === modalparent[event.target.getAttribute('data-index')]) {
        modalparent[event.target.getAttribute('data-index')].style.display = 'none';
    }
};