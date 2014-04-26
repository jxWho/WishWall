function createNewWish(form)
{
    // validations
    var sign = true;
    if($('input[name="newWishTitle"]').val() == "")
    {
        $('input[name="newWishTitle"]').css('background-color', '#ff8888');
        sign = false;
    }
    else
    {
        $('input[name="newWishTitle"]').css('background-color', 'white');
    }
    if($('textarea[name="newWishDescription"]').val() == "")
    {
        $('textarea[name="newWishDescription"]').css('background-color', '#ff8888');
        sign = false;
    }
    else
    {
        $('textarea[name="newWishDescription"]').css('background-color', 'white');
    }
    if($('input[name="newWishExpDate"]').val() == "")
    {
        $('input[name="newWishExpDate"]').css('background-color', '#ff8888');
        sign = false;
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