/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(document).ready(function($) {
    


    $(document).ready(function(){
    const swiper = new Swiper('.swiper', { 
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        slidesPerView: 3,
        grid: {
            rows: 2,
        },
            clickable: true,
        });
    });

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    }); 

    var $listing = $('.all-projects-wrapper').isotope({
        itemSelector: '.all-projects-wrapper > div',
        layoutMode: 'fitRows',
    });

    // bind filter button click
    $("#filters-all").on("click", "button", function() {
        var filterValue = $(this).attr('data-filter');
        $listing.isotope({ filter: filterValue });
    }); 
});