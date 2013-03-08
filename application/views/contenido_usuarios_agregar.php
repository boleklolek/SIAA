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
echo form_open('usuarios/guardar');
echo form_label('Nombre completo:','nombre');
$data = array(
              'name'        => 'nombre',
              'placeholder' => 'Nombre completo'
            );
echo nbs(2);
echo form_input($data);
echo br();
echo form_label('Login:', 'login');
$data1 = array(
              'name'        => 'login',
              'placeholder' => 'Login'
            );
echo nbs(2);
echo form_input($data1);
echo br();
echo form_label('Contraseña;', 'password');
echo nbs(2);
echo form_password('password');
echo br();
echo form_label('Correo electrónico:', 'email');
$data2 = array(
              'name'        => 'email',
              'placeholder' => 'Correo electrónico'
            );
echo nbs(2);
echo form_input($data2);
echo br();
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>