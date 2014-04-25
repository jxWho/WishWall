$(document).ready(function(){
    $('button[name="showWishDetails"]').click(showWishDetails);
    $('button[name="hideWishDetails"]').click(hideWishDetails);
});
// show details of a wish as well as displaying upper arrow and hiding lower arrow
function showWishDetails()
{
    // show details
    $(this).parent().find('div[name="wishDetails"]').show();
    $(this).hide();
}

// hide details of a wish as well as displaying lower arrow 
function hideWishDetails()
{
    // hide details
    $(this).parent().hide();
    $(this).parent().parent().find('button[name="showWishDetails"]').show();
}