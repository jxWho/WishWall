<div id="newWish">
    <form action="<?php echo site_url() ?>/WishWall/createNewWish" method="post">
        <fieldset style="width: 500px; border: none">
            Title: <input name="newWishTitle" class="input_out" type="text" 
            onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'">
                    </input>
            <span style="float:right;">Expiration Date(yyyy-mm-dd): <input name="newWishExpDate" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></input></span><br/><br/>
            <textarea name="newWishDescription" style="width: 600px; height: 200px; overflow: visible;"></textarea><br/><br/>
            
            <input type="button" class="redbutton" onclick="createNewWish(this.form)" style="float: right;" value="I have a wish"></input>
        </fieldset>
    </form>
    <hr>
</div>