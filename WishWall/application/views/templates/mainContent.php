    <div id="mainContent" class="scroll">
        <h3>This is main content</h3>
        <hr>
        <?php
            for($i = 0; $i < count($wishes); $i++)
            {
                $data['wish'] = $wishes[$i];
                $data['wishCard'] = $wishesForCard[$i];
                $this->load->view('templates/wishBox.php', $data);
            }
         ?>
    </div>

