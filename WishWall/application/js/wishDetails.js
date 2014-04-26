$(document).ready(function(){
    $('button[name="showWishDetails"]').click(showWishDetails);
    $('button[name="hideWishDetails"]').click(hideWishDetails);
});
// show details of a wish as well as displaying upper arrow and hiding lower arrow
function showWishDetails()
{
    // show details
    $(this).parent().find('div[name="wishDetails"]').show('slow');
    $(this).hide('slow');
}

// hide details of a wish as well as displaying lower arrow 
function hideWishDetails()
{
    // hide details
    $(this).parent().hide('slow');
    $(this).parent().parent().find('button[name="showWishDetails"]').show('slow');
}

// helps with certain function
function help(siteUrl, buttonObj)
{
    // get the wish id
    var wishId = $(buttonObj).parent().parent().find('input[name="wishId"]').val();
    $.ajax({
        url: siteUrl + '/WishWall/help',
        type: 'POST',
        data: {wishId: wishId},
        success: function(result)
        {
            alert("Thank you!");
        }
    });
    
}