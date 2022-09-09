$(function(){
  $('.lineup-tab li').on('click', function() {
    $('.lineup-tab li').removeClass('active');
    $('.lineup-item').hide();
    $('.lineup-item--nothing').hide();

    const target = $(this).data('tab');
    console.log($('.lineup-item--' + target).length);
    if (target === 'all') {
      $('.lineup-item').show();
    } else if ($('.lineup-item--' + target).length === 0 ) {
      $('.lineup-item--nothing').show();
    } else {
      $('.lineup-item--' + target).show();
    }
    $(this).addClass('active');
  })
});
