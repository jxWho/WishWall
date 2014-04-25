function createNewWish(form)
{
    // validations
    var sign = true;
    if($('input[name="newWishTitle"]').val() == "")// empty
    {
        alert("empty title");
        sign = false;
        $('input[name="newWishTitle"]').css('background-color', '#883344');
    }
    else
    {
        $('input[name="newWishTitle"]').css('background-color', 'white');
    }
    if($('textarea[name="newWishDescription"]').val() == "")// empty
    {
        alert("empty description");
        sign = false;
        $('textarea[name="newWishDescription"]').css('background-color', '#883344');
    }
    else
    {
        $('textarea[name="newWishDescription"]').css('background-color', 'white');
    }
    if($('input[name="newWishExpDate"]').val() == "")// empty
    {
        alert("empty expiration date");
        sign = false;
        $('input[name="newWishExpDate"]').css('background-color', '#883344');
    }
    else
    {
        $('input[name="newWishExpDate"]').css('background-color', 'white');
    }
    if(sign)
        form.submit();
    else
        return false;
}