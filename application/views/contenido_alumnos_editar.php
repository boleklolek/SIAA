<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/alumnos/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/alumnos/agregar'?>">Agregar Nuevo</a></li>
		<li><a href="<?php echo site_url().'/alumnos/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
echo form_open_multipart('alumnos/actualizar');
echo form_hidden('id', $datos_alumno->id);
echo form_label('Status:', 'estatus');
echo nbs(2);
echo form_dropdown('estatus', $opciones_estatus, set_value('estatus', (isset($datos_alumno->estatus)) ? $datos_alumno->estatus : ''));
echo br();
echo form_label('Grado:', 'grado');
echo nbs(2);
echo form_dropdown('grado', $opciones_grado, set_value('grado', (isset($datos_alumno->grado)) ? $datos_alumno->grado : ''));
echo br();
echo form_label('Programa:', 'programa');
echo nbs(2);
echo form_dropdown('programa', $programas, set_value('programa', (isset($datos_alumno->programa)) ? $datos_alumno->programa : ''));
echo br();
echo form_label('Plan:', 'plan');
echo nbs(2);
echo form_dropdown('plan', $planes, set_value('plan', (isset($datos_alumno->plan)) ? $datos_alumno->plan : ''));
echo br();
echo form_label('Nombre:','nombre');
echo nbs(2);
echo form_input('nombre',$datos_alumno->nombre);
echo br();
echo form_label('Apellido paterno:', 'apaterno');
echo nbs(2);
echo form_input('apaterno',$datos_alumno->apaterno);
echo br();
echo form_label('Apellido materno:', 'amaterno');
echo nbs(2);
echo form_input('amaterno',$datos_alumno->amaterno);
echo br();
echo form_label('Teléfono 1:', 'tel1');
echo nbs(2);
echo form_input('tel1',$datos_alumno->tel1);
echo br();
echo form_label('Teléfono 2:', 'tel2');
echo nbs(2);
echo form_input('tel2',$datos_alumno->tel2);
echo br();
echo form_label('Correo electr&oacute;nico:', 'email');
echo nbs(2);
echo form_input('email',$datos_alumno->email);
echo br();
echo form_label('Página electrónica:', 'url');
echo form_input('url',$datos_alumno->url);
echo br();
echo form_label('RFC:', 'rfc');
echo nbs(2);
echo form_input('rfc',$datos_alumno->rfc);
echo br();
echo form_label('CURP:', 'curp');
echo nbs(2);
echo form_input('curp',$datos_alumno->curp);
echo br();
echo form_label('Fecha de nacimiento:', 'fecha_nacimiento');
$data9 = array(
              'name'        => 'fecha_nacimiento',
              'placeholder' => '0000-00-00',
              'class' => 'datepicker',
              'data-date-format'=>"yyyy-mm-dd",
              'value' => $datos_alumno->fecha_nacimiento
            );
echo nbs(2);
echo form_input($data9);
echo br();
echo form_label('Pais de nacimiento:', 'pais_nacimiento');
echo nbs();
echo form_dropdown('pais_nacimiento', $paises, set_value('pais_nacimiento', (isset($datos_alumno->pais_nacimiento)) ? $datos_alumno->pais_nacimiento : ''));
echo br();
$data10 = array(
              'name'        => 'lugar_nacimiento',
              'placeholder' => 'Lugar de nacimiento',
              'value' => $datos_alumno->lugar_nacimiento
            );
echo form_label('Lugar de nacimiento:', 'lugar_nacimiento');
echo nbs();
echo form_input($data10);
echo br();
$data11 = array(
              'name'        => 'nacionalidad',
              'placeholder' => 'Nacionalidad',
              'value' => $datos_alumno->nacionalidad
            );
echo form_label('Nacionalidad:', 'nacionalidad');
echo nbs();
echo form_input($data11);
echo br();
$data12 = array(
              'name'        => 'domicilio',
              'placeholder' => 'Domicilio',
              'value' => $datos_alumno->domicilio
            );
echo form_label('Domicilio:', 'domicilio');
echo nbs();
echo form_input($data12);
echo br();
$data14 = array(
              'name'        => 'colonia',
              'placeholder' => 'Colonia',
              'value' => $datos_alumno->colonia
            );
echo form_label('Colonia:', 'colonia');
echo nbs(2);
echo form_input($data14);
echo br();
$data15 = array(
              'name'        => 'delegacion',
              'placeholder' => 'Delegación',
              'value' => $datos_alumno->delegacion
            );
echo form_label('Delegación:', 'delegacion');
echo nbs();
echo form_input($data15);
echo br();
$data16 = array(
              'name'        => 'estado',
              'placeholder' => 'Estado',
              'value' => $datos_alumno->estado
            );
echo form_label('Estado:', 'estado');
echo nbs();
echo form_input($data16);
echo br();
$data17 = array(
              'name'        => 'cp',
              'placeholder' => 'C.P.',
              'value' => $datos_alumno->cp
            );
echo form_label('C.P.:', 'cp');
echo nbs();
echo form_input($data17);
echo br();
$data18 = array(
              'name'        => 'carrera',
              'placeholder' => 'Carrera',
              'value' => $datos_alumno->carrera
            );
echo form_label('Carrera:', 'carrera');
echo nbs();
echo form_input($data18);
echo br();
echo form_label('Titulado:','titulado');
echo nbs(2);
echo form_label('Si','si');
echo nbs();
echo form_radio('titulado','1',set_radio('titulado','1',($datos_alumno->titulado == '1') ? TRUE: ''));
echo nbs(2);
echo form_label('No','no');
echo nbs();
echo form_radio('titulado','0',set_radio('titulado','1',($datos_alumno->titulado == '0') ? TRUE: ''));
echo br();
echo form_label('Fecha de titulación:', 'fecha_titulacion');
$data19 = array(
              'name'        => 'fecha_titulacion',
              'placeholder' => '0000-00-00',
              'class' => 'datepicker',
              'data-date-format'=>"yyyy-mm-dd",
              'value' => $datos_alumno->fecha_titulacion
            );
echo nbs(2);
echo form_input($data19);
echo br();
$data20 = array(
              'name'        => 'porcentaje',
              'placeholder' => 'Porcentaje',
              'value' => $datos_alumno->porcentaje
            );
echo form_label('Porcentaje de créditos:', 'porcentaje');
echo nbs(2);
echo form_input($data20);
echo br();
$data21 = array(
              'name'        => 'anio_fin',
              'placeholder' => 'Año en que concluyo',
              'value' => $datos_alumno->anio_fin
            );
echo form_label('Año en que concluyo:', 'anio_fin');
echo nbs(2);
echo form_input($data21);
echo br();
$data22 = array(
              'name'        => 'promedio',
              'placeholder' => 'Promedio obtenido',
              'value' => $datos_alumno->promedio
            );
echo form_label('Promedio obtenido:', 'promedio');
echo nbs(2);
echo form_input($data22);
echo br();
$data23 = array(
              'name'        => 'donde',
              'placeholder' => 'Institución donde estudio',
              'value' => $datos_alumno->donde
            );
echo form_label('Institución donde estudio:', 'donde');
echo nbs(2);
echo form_input($data23);
echo br(2);
$data13 = array(
              'name'        => 'notas',
              'placeholder' => 'Notas adicionales',
              'value' => $datos_alumno->notas
            );
echo form_label('Notas adicionales:', 'notas');
echo br();
echo form_textarea($data13);
echo br();
echo form_label('Curriculum vitae (solo pdf):','cv');
echo nbs(2);
echo form_upload('cv');
echo br();
echo form_label('Fotografia (solo jpg):','foto');
echo nbs(2);
echo form_upload('foto');
echo br(2);
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>