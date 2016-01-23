$(function() {
  wHeight = $(window).outerHeight();
  mainHeight = $('main').outerHeight() + 35 + 25;
  if(wHeight > mainHeight) {
    $('main, footer').addClass('fixed');
  }

  $('.ledgo-logo').css('cursor', 'pointer').off('click').on('click', function() {
    location.href = '/';
  });

  $('.mobile-menu i').off('click').on('click', function() {
    var nav = $(this).closest('header').find('nav');
    var height = $(window).height() - $('header').height();
    nav.height(height).css('overflow-y', 'auto');
    nav.slideToggle();
  });

  if(!window.templateUrl) {
    window.templateUrl = '';
  }

  var bgImages = [
    window.templateUrl + '/img/01_Signage_Web.jpg',
    window.templateUrl + '/img/02_Perfume_Web.jpg',
    window.templateUrl + '/img/03_Information_Web.jpg',
    window.templateUrl + '/img/04_Entertainment_Web.jpg',
    window.templateUrl + '/img/05_Architecture_Web.jpg',
  ];

  var bgImage = new Image();
  bgImage.src = bgImages[Math.floor(Math.random() * bgImages.length)];
  random = 'url(' + bgImage.src + ')';
  $('main').css('background-image', random);

  setInterval(function() {
    var bgImage = new Image();
    bgImage.src = bgImages[Math.floor(Math.random() * bgImages.length)];
    var random = 'url(' + bgImage.src + ')';
    $('main').css('background-image', random);
  }, 5000);
});
