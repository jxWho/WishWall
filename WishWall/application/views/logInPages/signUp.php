<?php
    $attributes = array(
        'class'=>'RegisterClass',
        'autocomplete' =>'off'
    );
    $this->load->helper('form');
?>
<?php echo validation_errors(); ?>
<?php echo form_open('Register', $attributes); ?>
<label for="Username">Username: </label>
<input class="necessary" type="input" name="Username" value=""/>

<div class="clear"></div>

<label for="Password">Password: </label>
<input class="necessary" type="password" name="Password" value=""/> <br>

<div class="clear"></div>

<label for="CPassword">Confirm Password:</label>
<input class="necessary" type="password" name="CPassword" value=""/> <br>

<div class="clear"></div>

<label for="email">Email:</label>
<input class="necessary" type="input" name="email" value=""/>

<div class="clear"></div>

<label for="address">Address:</label>
<input type="input" name="address" value=""/>

<div class="clear"></div>

<label for="pnumber">PhoneNumber</label>
<input type="input" name="pnumber" value=""/>

<div class="clear"></div>
<input class="redbutton" type="submit" name="register" value="Register" >
</form>
