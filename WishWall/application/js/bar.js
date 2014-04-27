$(document).ready(function(){
  $('#bar').mouseenter(entherBar);
  $('#bar').mouseleave(leaveBar);
});

function entherBar()
{
  $(this).css({
    'opacity': '1'
  });
}

function leaveBar()
{
  $(this).css({
    'opacity' : 0.3
  });
}

