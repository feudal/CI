<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php echo form_open('users/login', $attributes); ?>

	<div class="form-group">

		<?php

		echo form_label('Username');

		$data = array(
			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Enter Username'
		);

		echo form_input($data);

		?>

	</div>

	<div class="form-group">

		<?php

		echo form_label('Password');

		$data = array(
			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => 'Enter Password'
		);

		echo form_input($data) ?>

	</div>

	<div class="form-group">

		<?php

		$data = array(
			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Login'
		);

		echo form_submit($data) ?>

	</div>

 <?php echo form_close(); ?>