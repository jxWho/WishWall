<div class="wishbox" >
    <input name="wishId" style="display: none;" value="<?php echo $wish->wishId ?>"/>
    <h3><?php echo $wish->wishMaker ?></h3>
    <h3><?php echo $wish->titie ?></h3>
    <p>
        <?php echo $wish->description ?>
    </p>
    <button name="showWishDetails">↓</button>
    <div name="wishDetails" style="display: none">
        <p><?php echo $wish->date ?></p>
        <?php
            // display help button only if the user is not the helper nor the maker
            if($wish->wishMaker != $_SESSION['userName'] && $wish->wishHelper != $_SESSION['userName'])// 2 as an example
            {
                echo '<input type="button" name="help" onclick="help(\'' . site_url() . '\', this)" value="I can help" style="float: right;"></input><br/>';
            }
            else if($wish->wishMaker == $_SESSION['userName'])
            {
                ;
                // should display information : wish maker
            }
            else
            {
                ;
                // should display information : wish helper
            }
        ?>

        <button name="hideWishDetails">↑</button>
    </div>
</div>
<hr>
