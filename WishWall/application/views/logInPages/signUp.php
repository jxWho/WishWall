<?php
    $this->load->helper('form');
?>
<?php echo validation_errors(); ?>
<?php echo form_open('Register'); ?>
<label for="Username">Username: </label>
<input type="input" name="Username" /><br>

<label for="Password">Password: </label>
<input type="password" name="Password" /><br>

<label for="CPassword">Confirm Password:</label>
<input type="password" name="CPassword" /><br>

<input type="submit" name="register" value="Register" >
