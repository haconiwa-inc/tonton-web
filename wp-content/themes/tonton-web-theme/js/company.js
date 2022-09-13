$(function(){
  const close = $('.modal-close');
  const container = $('.modal-container');
  $(".md-btn").each(function(){
    $(this).on('click',function(e){
      let target = $(this).data('target');
      let modal = document.getElementById(target);
      $(modal).addClass('active');
      return false;
    });
  });
  $(close).on('click',function(){
    $(container).removeClass('active');
  });
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      $(container).removeClass('active');
    }
  });
});