<div class="wishbox">
    <input name="wishId" style="display: none" value="<?php echo $wish->wishId ?>"/>
    <h3><u><?php echo $wish->wishMaker ?></u></h3>
    <div class="wishInnerBox">
        <h5><?php echo $wish->title ?></h5>
        <button class="colorButton" name="showWishDetails">↓</button>
        <div name="wishDetails" style="display: none">
            <p name="description">
                <?php echo $wish->description ?>
            </p>
            <p>
                Created: <?php echo $wish->date ?>
                ------->
                Expires: <?php echo $wish->expDate ?>
            </p>
            <?php
                if($_SESSION['userName'] != $wish->wishMaker)
                    echo '<button style="float: right;" onclick="help(\'' . site_url() . '\', this)">I can help</button><br/>';
            ?>
            <button class="colorButton" name="hideWishDetails">↑</button>
        </div>
    </div>
</div>
<hr>
