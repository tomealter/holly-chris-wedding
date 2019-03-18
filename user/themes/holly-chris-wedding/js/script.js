// Custom scripts file

jQuery(document).ready(function ($) {

  'use strict';

  // Generic function that runs on window resize.
  function resizeStuff() {

  }

  // Runs function once on window resize.
  var TO = false;
  $(window).resize(function () {
    if (TO !== false) {
      clearTimeout(TO);
    }

    // 200 is time in miliseconds.
    TO = setTimeout(resizeStuff, 200);
  }).resize();


  // Scroll Magic
  var controller = new ScrollMagic.Controller();

  setTimeout( function() {
    new ScrollMagic.Scene({
      offset: -10,
      triggerElement: '.about',
      triggerHook: .5,
      reverse: false
    })
      .setClassToggle('.about', 'animation-active')
      // .addIndicators()
      .addTo(controller);
  }, 300);
  

  var mobileMenuButton = $('.mobile-menu-button');
  var mobileMenu = $('.mobile-menu');
  var mobileMenuLink = $('.mobile-menu .menu__link');
  

  if (mobileMenuButton.length) {
    console.log('the button exists');
  }

  console.log('is this thing on?');

  mobileMenuButton.on('click', function (e) {
    e.preventDefault();
    console.log('you clicked it');
    if ($(this).hasClass('is-active')) {
      $(this).removeClass('is-active');
      mobileMenu.removeClass('is-active');
    }
    else {
      $(this).addClass('is-active');
      mobileMenu.addClass('is-active');
    }
  });

  mobileMenuLink.on('click', function(e) {
    e.preventDefault();
    mobileMenuButton.removeClass('is-active');
    mobileMenu.removeClass('is-active');
  });


  // Smooth Scroll to Anchors
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
