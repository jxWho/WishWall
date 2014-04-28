$(this).ready(function(){
  $('.RegisterClass').find('.necessary').focus(getFocus);
  $('.RegisterClass').find('.necessary').blur(whenBlur);
});

function getFocus()
{
  $(this).css({
    'background' : 'yellow'
  });
}

function whenBlur()
{
  var v = $(this).val()
  if( v == "" ){
    $(this).css({
      'background' : 'pink'
    });
  }else{
    $(this).css({
      'background' : 'white'
    });
  }
}
