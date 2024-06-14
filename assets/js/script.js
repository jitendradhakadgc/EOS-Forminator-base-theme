console.info('%cSite developed by Critical Media - criticalmedia.co.uk', 'color: black' );

/*-----------------------------------------------------------------------------------*/
/* COOKIE SETTINGS - https://cookieconsent.osano.com */
/*-----------------------------------------------------------------------------------*/

// var gaProperty = 'UA-000000000-0'; // Analytics tag id

// var disableStr = 'ga-disable-' + gaProperty;
// if (document.cookie.indexOf(disableStr + '=true') > -1) {
//   window[disableStr] = true;
// }

// function disableCookies() {
//   document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
//   window[disableStr] = true;
// }

// function enableCookies() {
//   window.dataLayer = window.dataLayer || [];
//   function gtag() {
//     dataLayer.push(arguments)
//   }
//   gtag('js', new Date());
//   gtag('config', 'UA-000000000-0', { 'anonymize_ip': true });
//   window[disableStr] = false;
// }

// window.addEventListener("load", function () {
//   window.cookieconsent.initialise({
//     container: document.getElementById("content"),
//     "revokable": false,
//     "autoOpen": true,
//     "type": "opt-out",
//     "revokeBtn": "<a tabindex='0' title='Change you cookie settings' aria-label='change your cookie settings' class='cc-revoke {{classes}} fas fa-cookie-bite'><span class='sr-only'>Change cookie settings</span></a>",
//     "content": {
//       "message": 'We are using cookies to ensure you get the best experience on our website. To learn more about the cookies we use, please read our',
//       "link": "privacy policy",
//       "allow": "Allow cookies",
//       "deny": "Decline cookies",
//       "href": "/privacy-policy/"
//     },
//     elements: {
//       messagelink: '<span id="cookieconsent:desc" class="cc-message">{{message}} <a aria-label="learn more about cookies" tabindex="0" class="cc-link" href="{{href}}" target="_blank">{{link}}</a>.</span>',
//     },

//     onInitialise: function (status) {
//       var type = this.options.type;
//       var didConsent = this.hasConsented();
//       if (type == 'opt-out' && !didConsent) {
//         disableCookies();
//         if (this.options.revokable) {
//           setTimeout(function () {
//             document.getElementsByClassName("cc-revoke")[0].style.display = "block";
//           });
//         }
//       }
//     },

//     onStatusChange: function (status, chosenBefore) {
//       var type = this.options.type;
//       var didConsent = this.hasConsented();
//       if (type == 'opt-out' && !didConsent) {
//         disableCookies();
//       }
//       if (type == 'opt-out' && didConsent) {
//         enableCookies();
//       }
//     }

//   });
// });


/*-----------------------------------------------------------------------------------*/
/* FORCE PAGE RELOAD TO STOP SAFARI & EDGE PAGE CHACHE */
/*-----------------------------------------------------------------------------------*/

window.onpageshow = function(event) {
  if (event.persisted) {
    window.location.reload()
  }
};


/*-----------------------------------------------------------------------------------*/
/* STICKY HEADER */
/*-----------------------------------------------------------------------------------*/

// jQuery(function(){
//   // Run it on page-loaded
//   setHeaderColour();
//   // Run it on scroll
//   jQuery(window).scroll(setHeaderColour);
// });

// function setHeaderColour() {
//   if (jQuery(window).scrollTop() > 150) {
//     jQuery('.header').addClass("header--sticky");
//   }
//   else{
//     jQuery('.header').removeClass("header--sticky");
//   }
// }

/* Start jQuery DOC ready */

jQuery(document).ready(function () {

  var $parent = jQuery('.navigation__secondary .menu-item');

  jQuery('.sub-menu').parent().addClass('menu-item-has-children')
  
  $parent.find('a').attr('aria-expanded', 'false');
  $parent.find('.sub-menu').attr('aria-hidden', 'true');
  
  $parent.find('a').hover(function(){
    jQuery(this).attr('aria-expanded', 'true');
    jQuery(this).next().attr('aria-hidden', 'false');
  },function(){
    jQuery(this).attr('aria-expanded', 'false');
    jQuery(this).next().attr('aria-hidden', 'true');
  });

  /*-----------------------------------------------------------------------------------*/
  /* DISABLE HREF */
  /*-----------------------------------------------------------------------------------*/

  jQuery(".disabled").removeAttr('href');


  /*-----------------------------------------------------------------------------------*/
  /* INIT RESPONSIVE NAV */
  /*-----------------------------------------------------------------------------------*/

  var customToggle = document.getElementById( 'navToggle' );

  var navigation = responsiveNav("#headerNav", {
  customToggle: "#navToggle", // Selector: Specify the ID of a custom toggle
  enableFocus: true,
  enableDropdown: true,
  openDropdown: '<span class="sr-only">Open sub menu</span>',
  closeDropdown: '<span class="sr-only">Close sub menu</span>',
    open: function () {
    	customToggle.innerHTML = '<i class="fas fa-times"></i><span>Close</span>';
    },
    close: function () {
    	customToggle.innerHTML = '<i class="fas fa-bars"></i><span>Menu</span>';
    },
    resizeMobile: function () {
      customToggle.setAttribute( 'aria-controls', 'headerNav' );
    },
    resizeDesktop: function () {
      customToggle.removeAttribute( 'aria-controls' );
    },
  });


  /*-----------------------------------------------------------------------------------*/
  /* RESPONSIVE NAVIGATION */
  /*-----------------------------------------------------------------------------------*/

  jQuery('.navigation li ul').parent().addClass('menu-item-has-children');


  /*-----------------------------------------------------------------------------------*/
  /* CONVERT HOVER TO TOUCH */
  /*-----------------------------------------------------------------------------------*/

  jQuery('a').bind('touchstart', function(){
    jQuery(this).addClass('hover');
  }).bind('touchend', function(){
    jQuery(this).removeClass('hover');
  });

  jQuery('button').bind('touchstart', function(){
    jQuery(this).addClass('hover');
  }).bind('touchend', function(){
    jQuery(this).removeClass('hover');
  });

  jQuery('.btn').bind('touchstart', function(){
    jQuery(this).addClass('hover');
  }).bind('touchend', function(){
    jQuery(this).removeClass('hover');
  });


  /*-----------------------------------------------------------------------------------*/
  /* HEADER SEARCH */
  /*-----------------------------------------------------------------------------------*/

  /* --------------------- Search Toggle --------------------- */

  //Extent jQuery toggleClass to toggleText

  $.fn.extend({
    toggleText: function(a, b){
      return this.text(this.text() == b ? a : b);
    }
  });

  jQuery("#searchToggle").click(function(){

    jQuery(this).toggleClass("close open");

    jQuery(this).attr('aria-expanded', function (i, attr) {
      return attr == 'true' ? 'false' : 'true'
    });

    jQuery(this).attr('title', function (i, attr){
      return attr === "Open search form" ? "Close search form" : "Open search form";
    })

    jQuery(this).find(".sr-only").toggleText('Open Search Form', 'Close Search Form');

    jQuery("#headerSearch").toggleClass("inactive active");

    jQuery('#headerSearch input').focus();

  });


  /* --------------------- Header Search Desktop Validation using https://jqueryvalidation.org/ --------------------- */

  var searchValidator = jQuery("#headerSearch form").validate({
    debug: false,
    focusCleanup: true,
    focusInvalid: false,
    rules: {
      s: "required",
    },
    messages: {
      s: "Please enter a search term",
    },
    errorPlacement: function(error, element) {
      offset = element.offset();
      error.addClass('message'); // add a class to the wrapper
      error.hide().insertAfter(element)
    },
    onfocusin: function(element, event) {
      this.lastActive = element;
      // hide error label and remove error class on focus if enabled
      if (this.settings.focusCleanup && !this.blockFocusCleanup) {
        if (this.settings.unhighlight) {
          this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
      }
      this.addWrapper(this.errorsFor(element)).fadeOut();
      }
    },
    showErrors: function() {
      var i, elements;
      for (i = 0; this.errorList[i]; i++) {
        var error = this.errorList[i];
        if (this.settings.highlight) {
          this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
        }
        this.showLabel(error.element, error.message);
      }
      if (this.errorList.length) {
        this.toShow = this.toShow.add(this.containers);
      }
      if (this.settings.success) {
        for (i = 0; this.successList[i]; i++) {
          this.showLabel(this.successList[i]);
        }
      }
      if (this.settings.unhighlight) {
        for (i = 0, elements = this.validElements(); elements[i]; i++) {
          this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
        }
      }
      this.toHide = this.toHide.not(this.toShow);
      this.hideErrors();
      this.addWrapper(this.toShow).fadeIn();
    },

    highlight: function(element) {
      jQuery(element).parent().addClass("error");
    },
    unhighlight: function(element) {
      jQuery(element).parent().removeClass("error");
    },

    submitHandler: function(form) {
      form.submit();
    }

  });

  jQuery("#searchToggle").click(function() {
    searchValidator.resetForm();
  });


  /* --------------------- Header Search Mobile Validation using https://jqueryvalidation.org/ --------------------- */

  var searchSmallValidator = jQuery("#headerSearchSmall form").validate({
    debug: false,
    focusCleanup: true,
    focusInvalid: false,
    rules: {
      s: "required",
    },
    messages: {
      s: "Please enter a search term",
    },
    errorPlacement: function(error, element) {
      offset = element.offset();
      error.addClass('message'); // add a class to the wrapper
      error.hide().insertAfter(element)
    },
    onfocusin: function(element, event) {
      this.lastActive = element;
      // hide error label and remove error class on focus if enabled
      if (this.settings.focusCleanup && !this.blockFocusCleanup) {
        if (this.settings.unhighlight) {
          this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
      }
      this.addWrapper(this.errorsFor(element)).fadeOut();
      }
    },
    showErrors: function() {
      var i, elements;
      for (i = 0; this.errorList[i]; i++) {
        var error = this.errorList[i];
        if (this.settings.highlight) {
          this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
        }
        this.showLabel(error.element, error.message);
      }
      if (this.errorList.length) {
        this.toShow = this.toShow.add(this.containers);
      }
      if (this.settings.success) {
        for (i = 0; this.successList[i]; i++) {
          this.showLabel(this.successList[i]);
        }
      }
      if (this.settings.unhighlight) {
        for (i = 0, elements = this.validElements(); elements[i]; i++) {
          this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
        }
      }
      this.toHide = this.toHide.not(this.toShow);
      this.hideErrors();
      this.addWrapper(this.toShow).fadeIn();
    },

    highlight: function(element) {
      jQuery(element).parent().addClass("error");
    },
    unhighlight: function(element) {
      jQuery(element).parent().removeClass("error");
    },

    submitHandler: function(form) {
      form.submit();
    }

  });

  jQuery("#navToggle").click(function() {
    searchSmallValidator.resetForm();
  });

  
  /*-----------------------------------------------------------------------------------*/
  /* SEARCH PAGE VALIDATION - https://jqueryvalidation.org/ */
  /*-----------------------------------------------------------------------------------*/

  jQuery("main form.search").validate({
    debug: false,
    focusCleanup: true,
    focusInvalid: false,
    rules: {
      s: "required",
    },
    messages: {
      s: "Please enter a search term.",
    },
    errorPlacement: function(error, element) {
      offset = element.offset();
      error.addClass('message'); // add a class to the wrapper
      error.hide().insertAfter(element)
    },
    onfocusin: function(element, event) {
      this.lastActive = element;
      // hide error label and remove error class on focus if enabled
      if (this.settings.focusCleanup && !this.blockFocusCleanup) {
        if (this.settings.unhighlight) {
          this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
      }
      this.addWrapper(this.errorsFor(element)).fadeOut();
      }
    },
    showErrors: function() {
      var i, elements;
      for (i = 0; this.errorList[i]; i++) {
        var error = this.errorList[i];
        if (this.settings.highlight) {
          this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
        }
        this.showLabel(error.element, error.message);
      }
      if (this.errorList.length) {
        this.toShow = this.toShow.add(this.containers);
      }
      if (this.settings.success) {
        for (i = 0; this.successList[i]; i++) {
          this.showLabel(this.successList[i]);
        }
      }
      if (this.settings.unhighlight) {
        for (i = 0, elements = this.validElements(); elements[i]; i++) {
          this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
        }
      }
      this.toHide = this.toHide.not(this.toShow);
      this.hideErrors();
      this.addWrapper(this.toShow).fadeIn();
    },
    submitHandler: function(form) {
      form.submit();
    }
  });


  /*-----------------------------------------------------------------------------------*/
  /* COMMENTS VALIDATION - https://jqueryvalidation.org/ */
  /*-----------------------------------------------------------------------------------*/

  jQuery(".comment__form form").validate({
    debug: false,
    focusCleanup: true,
    focusInvalid: false,
    // rules: {
    //   s: "required",
    // },
    // messages: {
    //   s: "Please enter a search term.",
    // },
    errorPlacement: function(error, element) {
      offset = element.offset();
      error.addClass('message'); // add a class to the wrapper
      error.hide().insertAfter(element)
    },
    onfocusin: function(element, event) {
      this.lastActive = element;
      // hide error label and remove error class on focus if enabled
      if (this.settings.focusCleanup && !this.blockFocusCleanup) {
        if (this.settings.unhighlight) {
          this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
      }
      this.addWrapper(this.errorsFor(element)).fadeOut();
      }
    },
    showErrors: function() {
      var i, elements;
      for (i = 0; this.errorList[i]; i++) {
        var error = this.errorList[i];
        if (this.settings.highlight) {
          this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
        }
        this.showLabel(error.element, error.message);
      }
      if (this.errorList.length) {
        this.toShow = this.toShow.add(this.containers);
      }
      if (this.settings.success) {
        for (i = 0; this.successList[i]; i++) {
          this.showLabel(this.successList[i]);
        }
      }
      if (this.settings.unhighlight) {
        for (i = 0, elements = this.validElements(); elements[i]; i++) {
          this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
        }
      }
      this.toHide = this.toHide.not(this.toShow);
      this.hideErrors();
      this.addWrapper(this.toShow).fadeIn();
    },

    submitHandler: function(form) {
      form.submit();
    }


  });


  /*-----------------------------------------------------------------------------------*/
  /* SLICK SLIDERS - https://kenwheeler.github.io/slick/ */
  /*-----------------------------------------------------------------------------------*/

  jQuery('.media .gallery').slick({
    slidesToShow: 1,
    arrows: true,
    infinite: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    //speed: 500,
    autoplay: true,
    autoplaySpeed: 8000,
    fade: true,
    cssEase: 'linear',
    dots: false,
    // dotsClass: 'slick-nav',
    // customPaging: function(slider, i) {
    //   return '<span class="slick-dot">&nbsp;</span>';
    // },
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right" aria-hidden="true"></i><span class="sr-only">Next</span></button>',
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left" aria-hidden="true"></i><span class="sr-only">Previous</span></button>',
    adaptiveHeight: true
  });


});

/* End jQuery DOC ready */
