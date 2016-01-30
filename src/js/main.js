function isMobile() {
  return $('.is-mobile').is(':visible');
}

function isTablet() {
  return $('.is-tablet').is(':visible');
}

function isDesktop() {
  return $('.is-desktop').is(':visible');
}

function showContent() {
  if($('article.processed').length){
    return false
  }

  $('article .inner p').hide();
  $('article .inner p:first').show();
  $('article .inner').append('<p class="read-more-par aligncenter"><a class="read-more" href>Read more</a></p>');
  $('article .inner a.read-more').off('click').on('click', function(e) {
    e.preventDefault();
    var collapsed = $(this).closest('article').hasClass('collapsed');
    var $inner = $(this).closest('.inner');

    if(collapsed) {
      // uitklappen
      $(this).closest('article').removeClass('collapsed');
      $inner.find('p').show();
      $inner.find('a.read-more').text('Read less');
    }
    else {
      // inklappen
      $(this).closest('article').addClass('collapsed');
      $inner.find('p:not(.read-more-par)').hide();
      $inner.find('p:first').show();
      $inner.find('a.read-more').text('Read more');
    }

    resize();
    return false;
  });

  $('article').addClass('collapsed processed');
}

function resize() {
  wHeight = $(window).outerHeight();
  mainHeight = $('main').outerHeight() + 35 + 25;
  if(wHeight > mainHeight) {
    $('main, footer').addClass('fixed');
  }
  else {
    $('main, footer').removeClass('fixed');
  }

  if(!isMobile()) {
    showContent();
  }
  else {
    $('article .inner p').show();
    $('article .inner p.read-more-par').remove();
    $('article').removeClass('collapsed processed');
  }
}


$(function() {
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

  window.setTimeout(function() {
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
  }, 5000);

  resize();
  $(window).off('resize').on('resize', resize);
});
