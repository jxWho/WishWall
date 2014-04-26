    <div id="profile" >
        <h3><?php echo $userName ?></h3>
        <hr>
        <ul>
            <li>
                <strong>
                    <?php
                        echo isset($wishesMake)?$wishesMake:0;
                    ?>
                </strong>
                <span>Wishes made</span>
            </li>
            <li>
                <strong>
                    <?php
                        echo isset($wishesHelp)?$wishesHelp:0;
                    ?>
                    </strong>
                <span>Wishes helped</span>
            </li>
        </ul>
    </div>
</div>
