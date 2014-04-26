$(document).ready(function(){
  $('.helperLink').mouseenter(entherCard);
  $('.helperLink').mouseleave(leaveCard);
});

function entherCard(){
    $(this).find('.informationCard').css({
      "display":"block"
    });
}

function leaveCard(){
  $(this).find('.informationCard').css({
    "display":'none'
  });
}
