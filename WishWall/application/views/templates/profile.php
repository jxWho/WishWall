    <div id="profile" >
        <h3><?php echo $userName ?></h3>
        <hr>
        <ul>
            <li>
                <a href="<?php echo $links[0][0] ?>" >
                    <strong>
                        <?php
                            echo isset($wishesMake)?$wishesMake:0;
                        ?>
                    </strong>
                    <span>Wishes made</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $links[1][0] ?>">
                    <strong>
                        <?php
                            echo isset($wishesHelp)?$wishesHelp:0;
                        ?>
                        </strong>
                    <span>Wishes helped</span>
                </a>
            </li>
        </ul>
    </div>
</div>
