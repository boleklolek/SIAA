<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/usuarios/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/usuarios/agregar'?>">Agregar Nuevo</a></li>
		<li><a href="<?php echo site_url().'/usuarios/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
echo form_open('usuarios/actualizar');
echo form_hidden('id', $datos_usuarios->id);
echo form_label('Nombre completo:','nombre');
echo nbs(2);
echo form_input('nombre',$datos_usuarios->nombre);
echo br();
echo form_label('Login:', 'login');
echo nbs(2);
echo form_input('login',$datos_usuarios->login);
echo br();
echo form_label('Contraseña:', 'password');
echo nbs(2);
echo form_password('password',$datos_usuarios->password);
echo br();
echo form_label('Correo electrónico:', 'email');
echo nbs(2);
echo form_input('email',$datos_usuarios->email);
echo br();
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>