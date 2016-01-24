$(function() {
  function resize() {
    wHeight = $(window).outerHeight();
    mainHeight = $('main').outerHeight() + 35 + 25;
    if(wHeight > mainHeight) {
      $('main, footer').addClass('fixed');
    }
  }

  resize();
  $(window).off('resize').on('resize', resize);

  $('.ledgo-logo').css('cursor', 'pointer').off('click').on('click', function() {
    location.href = '/';
  });

  $('.mobile-menu i').off('click').on('click', function() {
    var nav = $(this).closest('header').find('nav');
    var height = $(window).height() - $('header').height();
    nav.height(height).css('overflow-y', 'auto');
    nav.slideToggle();
  });
});
