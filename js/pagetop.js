$(function() {

  var
      speed = 700,
      scroll = 0;
  $('#pageTop').on("click",function() {
    $('html,body').animate({scrollTop: scroll}, speed);
  });
});
