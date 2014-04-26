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

    <div class="helperLink" >
    <?php
        $helpOrmake = $this->input->get('help', 0);
        if( $helpOrmake == 0 ){
            $temp = '<a class="boxSign" href="">Wish Helper</a>';
            if( $wishCard->wishHelper != NULL ){
                echo $temp;
                $uid = $wishCard->wishHelper;
                $this->load->model('UserManager');
                $UM = UserManager::getUserManager();
                $helper = $UM->getUserThroughID( $uid );
                $this->load->view('templates/userInformationCard',
                            array("WhelperOrMaker" => $helper )
                );
            }else{
                echo "<div>No helper</div>";
            }
        }else{
            $temp = '<a class="boxSign" href="">Wish Maker</a>';
            if( $wishCard->wishMaker != NULL ){
                echo $temp;
                $uid = $wishCard->wishMaker;
                $this->load->model('UserManager');
                $UM = UserManager::getUserManager();
                $maker = $UM->getUserThroughID( $uid );
                $this->load->view('templates/userInformationCard',
                    array("WhelperOrMaker" => $maker)
                );
            }else{
                echo "<div>No Maker</div>";
            }
        }
    ?>
    </div>
</div>
<hr>
