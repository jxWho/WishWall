<div id="contentFather">
    <div id="nav">
        <h3>This is navgiator</h3>
        <hr>
        <?php
            foreach($links as $l){
                $temp = "<div>";
                $temp .= "<a href='".$l[0]."'>".$l[1].'</a>';
                $temp .= "</div>";
                echo $temp;
                echo '<hr>';
            }
        ?>
    </div>



