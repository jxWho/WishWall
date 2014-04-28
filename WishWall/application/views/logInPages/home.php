<h3>Hello, I am a log In page ~~~~</h3>

<?php $this->load->helper('form'); ?>
<?php echo validation_errors(); ?>

<?php echo form_open('LogIn') ?>
    <label for="Username">Username:</label>
    <input type="input" name="Username" /><br />

    <label for="Password">Password: </label>
    <input type="Password" name="Password" /><br>

    <input class ="redbutton" type="submit" name="SignIn" value="Sign In" />
</form>

<?php $this->load->helper('url') ?>
<a  href="<?php echo base_url()?>index.php/Register">
<p id="signUpLink" class="redbutton">Sign up</p>
</a>
