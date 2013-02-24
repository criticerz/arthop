<?php

$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'value' => set_value('username'),
	'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
	'size'	=> 30,
	'placeholder' => 'username',
	'class' => 'input-block-level'
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'placeholder' => 'email',
	'class' => 'input-block-level'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'placeholder' => 'password',
	'class' => 'input-block-level'
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'placeholder' => 'password again',
	'class' => 'input-block-level'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-signin')); ?>

<h2 class="form-signin-heading">Sign Up</h2>

    <p>
    	<?php echo form_input($username); ?>
    	<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
    </p>

    <p>
    	<?php echo form_input($email); ?>
    	<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
    </p>

    <p>
    	<?php echo form_password($password); ?>
    	<?php echo form_error($password['name']); ?>
    </p>

    <p>
    	<?php echo form_password($confirm_password); ?>
    	<?php echo form_error($confirm_password['name']); ?>
    </p>


    
    <p>
    	<input type="submit" name="submit" class="btn btn-large btn-primary" value="Register" />
    </p>

<?php echo form_close(); ?>