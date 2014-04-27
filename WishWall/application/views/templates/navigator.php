<div id="contentFather">
    <div id="nav">
        <h3>This is navigator</h3>
        <hr>
        <?php
            foreach($links as $l){
                $temp = "<a href='".$l[0]."'>";
                $temp .= "<div class='redbutton'>";
                $temp .= "<span>".$l[1]."</span>";
                $temp .= "</div></a>";
                echo $temp;
            }
        ?>
            <?php
               $this->load->helper('url');
                echo "<a href='".site_url('WishWall/wall')."'>";

            ?>
        <div class='redbutton'>
            <span>Wish Wall</span>
        </div>
        <?php echo "</a>" ?>
    </div>



