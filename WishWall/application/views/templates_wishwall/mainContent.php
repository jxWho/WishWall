<div id="mainContent" >
    <h3 style="text-align: center;">Wish Wall</h3>
    <hr>
    <?php
        for($i = 0; $i < count($wishes); $i++)
        {
            $data['wish'] = $wishes[$i];
            $this->load->view('templates_wishwall/wishBox.php', $data);
        }
     ?>
    <?php echo $this->pagination->create_links(); ?>
</div>

