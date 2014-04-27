<div id="bar">
    <?php $this->load->helper("url") ?>
    <img src=
        "<?php echo base_url('application/css/images/toleft.jpeg')?>"
    alt="">
    <?php
        $this->load->helper('form');
        echo form_open('LogIn/logOut')
    ?>

    <input type="submit" name="logout" value="LogOut" />
    </form>
</div>
