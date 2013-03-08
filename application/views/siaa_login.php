<div id="container">
	<?php
	$attributes = array('class' => 'forma', 'id' => 'forma_login');
	echo form_open('siaa_login/validate_credentials',$attributes);
	echo '<h2 class="forma-heading">Por favor ingresa</h2>';
	$atri1 = array('class'=>'input-block-level', 'placeholder'=>'Nombre usuario', 'name'=>'username');
	echo form_input($atri1);
	$atri2 = array('class'=>'input-block-level', 'placeholder'=>'Contrase&ntilde;a', 'name'=>'password');
	echo form_password($atri2);
	echo br(2);
	$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Entrar');
	echo form_submit($atri);
	echo form_close();
	?>
</div>