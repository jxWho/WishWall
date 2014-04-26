<div id="newWish">
    <form action="<?php echo site_url() ?>/WishWall/createNewWish" method="post">
        <fieldset style="width: 500px;">
            Title: <input name="newWishTitle" onfocus="borderColor()" ></input>
            <span style="float:right;">Expiration Date(yyyy-mm-dd): <input name="newWishExpDate"></input></span><br/>
            <textarea name="newWishDescription" style="width: 600px; height: 200px;"></textarea><br/>
            
            <input type="button" onclick="createNewWish(this.form)" value="I have a wish"></input>
        </fieldset>
    </form>
</div>