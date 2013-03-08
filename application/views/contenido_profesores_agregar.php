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
echo form_open('profesores/guardar');
echo form_label('Grado:', 'grado');
echo nbs(2);
echo form_dropdown('grado', $opciones_grado);
echo br();
echo form_label('Nombre:','nombre');
$data = array(
              'name'        => 'nombre',
              'placeholder' => 'Nombre completo'
            );
echo nbs(2);
echo form_input($data);
echo br();
echo form_label('Apellido paterno:', 'apaterno');
$data1 = array(
              'name'        => 'apaterno',
              'placeholder' => 'Apellido paterno'
            );
echo nbs(2);
echo form_input($data1);
echo br();
echo form_label('Apellido materno:', 'amaterno');
$data3 = array(
              'name'        => 'amaterno',
              'placeholder' => 'Apellido materno'
            );
echo nbs(2);
echo form_input($data3);
echo br();
$data4 = array(
              'name'        => 'tel1',
              'placeholder' => 'Teléfono 1'
            );
echo form_label('Teléfono 1:', 'tel1');
echo nbs(2);
echo form_input($data4);
echo br();
$data5 = array(
              'name'        => 'tel2',
              'placeholder' => 'Teléfono 2'
            );
echo form_label('Teléfono 2:', 'tel2');
echo nbs(2);
echo form_input($data5);
echo br();
echo form_label('Correo electrónico:', 'email');
$data2 = array(
              'name'        => 'email',
              'placeholder' => 'Correo electrónico'
            );
echo nbs(2);
echo form_input($data2);
echo br();
echo form_label('Página electrónica:', 'url');
$data6 = array(
              'name'        => 'url',
              'placeholder' => 'Página electrónica'
            );
echo nbs(2);
echo form_input($data6);
echo br();
$data7 = array(
              'name'        => 'rfc',
              'placeholder' => 'RFC'
            );
echo form_label('RFC:', 'rfc');
echo nbs(2);
echo form_input($data7);
echo br();
$data8 = array(
              'name'        => 'curp',
              'placeholder' => 'CURP'
            );
echo form_label('CURP:', 'curp');
echo nbs(2);
echo form_input($data8);
echo br();
echo form_label('Fecha de nacimiento:', 'fecha_nacimiento');
$data9 = array(
              'name'        => 'fecha_nacimiento',
              'placeholder' => '0000-00-00',
              'class' => 'datepicker',
              'data-date-format'=>"yyyy-mm-dd"
            );
echo nbs(2);
echo form_input($data9);  
echo br();
echo form_label('Pais de nacimiento:', 'pais_nacimiento');
echo nbs(2);
echo form_dropdown('pais_nacimiento', $paises);
echo br();
$data10 = array(
              'name'        => 'lugar_nacimiento',
              'placeholder' => 'Lugar de nacimiento'
            );
echo form_label('Lugar de nacimiento:', 'lugar_nacimiento');
echo nbs(2);
echo form_input($data10);
echo br();
$data11 = array(
              'name'        => 'nacionalidad',
              'placeholder' => 'Nacionalidad'
            );
echo form_label('Nacionalidad:', 'nacionalidad');
echo nbs(2);
echo form_input($data11);
echo br();
$data12 = array(
              'name'        => 'notas',
              'placeholder' => 'Notas adicionales'
            );
echo form_label('Notas adicionales:', 'notas');
echo nbs(2);
echo form_textarea($data12);
echo br();
echo form_label('Fotografia:','foto');
echo nbs(2);
echo form_upload('foto');
echo br(2);
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>