<div id="wishWall" style="margin-left: 230px; border: solid thin; width: 500px; padding: 5px; height: 1000px;">
        <?php
            // show all wishes
            if(isset($wishes))
            {
                foreach($wishes as $row)
                {
                    echo '<div class="wish" style="border: solid thin; width: 480px; padding: 5px">' . 
                            '<h3>' . $row->title . '</h3>' . 
                            '<label name="wishMaker">●Wish Maker : ' . $row->wishMaker . '</label>' . 
                            '<div name="description">●Description : ' . $row->description . '</div>' . 
                         '</div><br/>';

                }
            }

        ?>
    </div>