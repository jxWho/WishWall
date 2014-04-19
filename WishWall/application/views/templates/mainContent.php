    <div id="mainContent">
        <h3>This is main content</h3>
        <hr>
        <?php
            $p = array(
                "wishTitle" => 'My Wish',
                "wishDescription" => 'I want a keyboard.',
                "wishMaker" => 'Hack',
            );
            for( $i = 0; $i < 2; $i++)
                $this->load->view('templates/wishBox',$p);
         ?>
    </div>

