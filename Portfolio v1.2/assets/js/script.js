// * --- Navigation sur la page --- * //

$(function() {
    $(".navbar a, footer a").on("click", function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function() {window.location.hash = hash;})
    });
})

// * --- Effet de slide sur la photo de profil --- * //

$(function() {

    var $mainMenuItems = $(".main-menu ul").children("li"),
    totalMainMenuItems = $mainMenuItems.length,
    openedIndex = 2,
        
    init = function() {
        bindEvents();
        if(validIndex(openedIndex))
            animateItem($mainMenuItems.eq(openedIndex), true, 700);
    },
    
    bindEvents = function() {
     
        $mainMenuItems.children(".images").click(function() {
            var newIndex = $(this).parent().index();
            checkAndAnimateItem(newIndex);
        });
        
        $(".bouton_presentation").hover(
        function() {
            $(this).addClass("hovered");
        },
        function() {
            $(this).removeClass("hovered");
        }
        );
        
        $(".bouton_presentation").click(function() {
            var newIndex = $(this).index();
            checkAndAnimateItem(newIndex);    
        });
        
        
    },
        
    validIndex = function(indexToCheck) {
        return (indexToCheck >= 0) && (indexToCheck < totalMainMenuItems);
    },
        
    animateItem = function($item, toOpen, speed) {
        var $colorImage = $item.find(".color"),
        itemParam = toOpen ? {width: "700px"}:{width: "350px"} ,                         
        colorImageParam = toOpen ? {left: "0px"}:{left: "350px"};     
        $colorImage.animate(colorImageParam,speed);
        $item.animate(itemParam,speed);    
    },
    
    checkAndAnimateItem = function(indexToCheckAndAnimate) {
        if(openedIndex === indexToCheckAndAnimate)
        {
            animateItem($mainMenuItems.eq(indexToCheckAndAnimate), false, 300);
            openedIndex = -1;
        }
        else
        {
            if(validIndex(indexToCheckAndAnimate))
            {
                animateItem($mainMenuItems.eq(openedIndex), false, 300);                         
                openedIndex = indexToCheckAndAnimate;
                animateItem($mainMenuItems.eq(openedIndex), true, 300);
            }
        }
    };
    
    init();
});

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