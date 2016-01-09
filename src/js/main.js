$(function() {
  $('.site-title').css('cursor', 'pointer').off('click').on('click', function() {
    location.href = '/';
  });
});
