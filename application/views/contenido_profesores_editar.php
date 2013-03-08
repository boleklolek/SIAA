<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/profesores/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/profesores/agregar'?>">Agregar Nuevo</a></li>
		<li><a href="<?php echo site_url().'/profesores/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
echo form_open_multipart('profesores/actualizar');
echo form_hidden('id', $datos_profesor->id);
echo form_label('Grado:', 'grado');
echo nbs(2);
echo form_dropdown('grado', $opciones_grado, set_value('grado', (isset($datos_profesor->grado)) ? $datos_profesor->grado : ''));
echo br();
echo form_label('Nombre:','nombre');
$data = array(
              'name'        => 'nombre',
              'placeholder' => 'Nombre completo',
              'value' => $datos_profesor->nombre
            );
echo nbs(2);
echo form_input($data);
echo br();
echo form_label('Apellido paterno:', 'apaterno');
$data1 = array(
              'name'        => 'apaterno',
              'placeholder' => 'Apellido paterno',
              'value' => $datos_profesor->apaterno
            );
echo nbs(2);
echo form_input($data1);
echo br();
echo form_label('Apellido materno:', 'amaterno');
$data3 = array(
              'name'        => 'amaterno',
              'placeholder' => 'Apellido materno',
              'value' => $datos_profesor->amaterno
            );
echo nbs(2);
echo form_input($data3);
echo br();
$data4 = array(
              'name'        => 'tel1',
              'placeholder' => 'Teléfono 1',
              'value' => $datos_profesor->tel1
            );
echo form_label('Teléfono 1:', 'tel1');
echo nbs(2);
echo form_input($data4);
echo br();
$data5 = array(
              'name'        => 'tel2',
              'placeholder' => 'Teléfono 2',
              'value' => $datos_profesor->tel2
            );
echo form_label('Teléfono 2:', 'tel2');
echo nbs(2);
echo form_input($data5);
echo br();
echo form_label('Correo electrónico:', 'email');
$data2 = array(
              'name'        => 'email',
              'placeholder' => 'Correo electrónico',
              'value' => $datos_profesor->email
            );
echo nbs(2);
echo form_input($data2);
echo br();
echo form_label('Página electrónica:', 'url');
$data6 = array(
              'name'        => 'url',
              'placeholder' => 'Página electrónica',
              'value' => $datos_profesor->url
            );
echo nbs(2);
echo form_input($data6);
echo br();
$data7 = array(
              'name'        => 'rfc',
              'placeholder' => 'RFC',
              'value' => $datos_profesor->rfc
            );
echo form_label('RFC:', 'rfc');
echo nbs(2);
echo form_input($data7);
echo br();
$data8 = array(
              'name'        => 'curp',
              'placeholder' => 'CURP',
              'value' => $datos_profesor->curp
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
              'data-date-format'=>"yyyy-mm-dd",
              'value' => $datos_profesor->fecha_nacimiento
            );
echo nbs(2);
echo form_input($data9);  
echo br();
echo form_label('Pais de nacimiento:', 'pais_nacimiento');
echo nbs(2);
echo form_dropdown('pais_nacimiento', $paises, set_value('pais_nacimiento', (isset($datos_profesor->pais_nacimiento)) ? $datos_profesor->pais_nacimiento : ''));
echo br();
$data10 = array(
              'name'        => 'lugar_nacimiento',
              'placeholder' => 'Lugar de nacimiento',
              'value' => $datos_profesor->lugar_nacimiento
            );
echo form_label('Lugar de nacimiento:', 'lugar_nacimiento');
echo nbs(2);
echo form_input($data10);
echo br();
$data11 = array(
              'name'        => 'nacionalidad',
              'placeholder' => 'Nacionalidad',
              'value' => $datos_profesor->nacionalidad
            );
echo form_label('Nacionalidad:', 'nacionalidad');
echo nbs(2);
echo form_input($data11);
echo br();
$data12 = array(
              'name'        => 'notas',
              'placeholder' => 'Notas adicionales',
              'value' => $datos_profesor->notas
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