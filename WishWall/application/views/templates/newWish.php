<div id="newWish">
    <form method="post" action="<?php echo site_url() . '/WishWall/createNewWish' ?> ">
        <fieldset style="width: 500px;">
            <input name="newWishTitle"></input><br/>
            <textarea name="newWishDescription" style="width: 600px; height: 200px;"></textarea><br/>
            <input name="newWishExpDate"></input><br/>
            <input type="button" onclick="createNewWish(this.form)" value="I have a wish"></input>
        </fieldset>
    </form>
</div>