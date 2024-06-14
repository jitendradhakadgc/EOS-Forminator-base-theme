//Add your JS customizations here

function mobileNav() {
    //toggles overflow on body + html to stop 
    //scrolling-x when mobile nav is open
    $('#toggle-nav').change( function() {
        if ($(this).prop('checked')) {
            $('html, body').addClass('open');
        }
        else {
            $('html, body').removeClass('open');
        }
    });
    //toggles mobile dropdown menus ++Also controls footer mobile dropdown menus
    $('#menu-mobile-menu.nav-list > li > a, #menu-mobile-menu-1.nav-list > li > a').click( function(e) {
        e.preventDefault();
        $(this).next('.sub-menu').slideToggle();
        $(this).find('i').toggleClass('rotate');
        $(this).toggleClass('open'); 
    });
}

function stickyNav() {
    //navigation has different styling when the user has scrolled
    $(window).scroll(function(){
        $('.header-desktop').toggleClass('sticky', $(this).scrollTop() >= 100);
    });
}


stickyNav()
mobileNav();
