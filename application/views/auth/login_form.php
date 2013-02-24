<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'placeholder' => 'email',
	'class' => 'input-block-level'
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'placeholder' => 'password',
	'class' => 'input-block-level'
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>


<?php echo form_open($this->uri->uri_string(), array('class' => 'form-signin')); ?>	
    <h2 class="form-signin-heading">Please sign in</h2>
    <!-- <input type="text" class="input-block-level" placeholder="Email address"> -->
    <?php echo form_input($login); ?>
    <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>

    <?php echo form_password($password); ?>
    <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>

    <!-- <input type="password" class="input-block-level" placeholder="Password"> -->
    <!-- <label class="checkbox">
      <?php echo form_checkbox($remember); ?> Remember me
    </label> -->
    
    <p>
    	<input type="submit" name="submit" class="btn btn-large btn-primary" />
    </p>

    <!--p>Not a member? <a href="<?= base_url('auth/register'); ?>">Sign up!</a-->

  <?php //echo form_submit('submit', 'Let me in', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo form_close(); ?>