<div class="wishbox" id="11" >
    <h3><?php echo $wish->wishMaker ?></h3>
    <h3><?php echo $wish->titie ?></h3>
    <p>
        <?php echo $wish->description ?>
    </p>
    <button name="showWishDetails">↓</button>
    <div name="wishDetails" style="display: none">
    <p><?php echo $wish->date ?></p>
    <button name="hideWishDetails">↑</button>
    </div>
</div>
<hr>
