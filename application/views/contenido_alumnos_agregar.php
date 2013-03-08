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
echo form_open_multipart('alumnos/guardar');
echo form_label('Status:', 'estatus');
echo nbs(2);
echo form_dropdown('estatus', $opciones_estatus);
echo br();
echo form_label('Grado:', 'grado');
echo nbs(2);
echo form_dropdown('grado', $opciones_grado);
echo br();
echo form_label('Programa:', 'programa');
echo nbs(2);
echo form_dropdown('programa', $programas);
echo br();
echo form_label('Plan:', 'plan');
echo nbs(2);
echo form_dropdown('plan', $planes);
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
echo form_label('Correo electr&oacute;nico:', 'email');
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
echo nbs();
echo form_dropdown('pais_nacimiento', $paises);
echo br();
$data10 = array(
              'name'        => 'lugar_nacimiento',
              'placeholder' => 'Lugar de nacimiento'
            );
echo form_label('Lugar de nacimiento:', 'lugar_nacimiento');
echo nbs();
echo form_input($data10);
echo br();
$data11 = array(
              'name'        => 'nacionalidad',
              'placeholder' => 'Nacionalidad'
            );
echo form_label('Nacionalidad:', 'nacionalidad');
echo nbs();
echo form_input($data11);
echo br();
$data12 = array(
              'name'        => 'domicilio',
              'placeholder' => 'Domicilio'
            );
echo form_label('Domicilio:', 'domicilio');
echo nbs();
echo form_input($data12);
echo br();
$data14 = array(
              'name'        => 'colonia',
              'placeholder' => 'Colonia'
            );
echo form_label('Colonia:', 'colonia');
echo nbs(2);
echo form_input($data14);
echo br();
$data15 = array(
              'name'        => 'delegacion',
              'placeholder' => 'Delegación'
            );
echo form_label('Delegación:', 'delegacion');
echo nbs();
echo form_input($data15);
echo br();
$data16 = array(
              'name'        => 'estado',
              'placeholder' => 'Estado'
            );
echo form_label('Estado:', 'estado');
echo nbs();
echo form_input($data16);
echo br();
$data17 = array(
              'name'        => 'cp',
              'placeholder' => 'C.P.'
            );
echo form_label('C.P.:', 'cp');
echo nbs();
echo form_input($data17);
echo br();
$data18 = array(
              'name'        => 'carrera',
              'placeholder' => 'Carrera'
            );
echo form_label('Carrera:', 'carrera');
echo nbs();
echo form_input($data18);
echo br();
echo form_label('Titulado:','titulado');
echo nbs(2);
echo form_label('Si','si');
echo nbs();
echo form_radio('titulado','1');
echo nbs(2);
echo form_label('No','no');
echo nbs();
echo form_radio('titulado','0');
echo br();
echo form_label('Fecha de titulación:', 'fecha_titulacion');
$data19 = array(
              'name'        => 'fecha_titulacion',
              'placeholder' => '0000-00-00',
              'class' => 'datepicker',
              'data-date-format'=>"yyyy-mm-dd"
            );
echo nbs(2);
echo form_input($data19);
echo br();
$data20 = array(
              'name'        => 'porcentaje',
              'placeholder' => 'Porcentaje'
            );
echo form_label('Porcentaje de créditos:', 'porcentaje');
echo nbs(2);
echo form_input($data20);
echo br();
$data21 = array(
              'name'        => 'anio_fin',
              'placeholder' => 'Año en que concluyo'
            );
echo form_label('Año en que concluyo:', 'anio_fin');
echo nbs(2);
echo form_input($data21);
echo br();
$data22 = array(
              'name'        => 'promedio',
              'placeholder' => 'Promedio obtenido'
            );
echo form_label('Promedio obtenido:', 'promedio');
echo nbs(2);
echo form_input($data22);
echo br();
$data23 = array(
              'name'        => 'donde',
              'placeholder' => 'Institución donde estudio'
            );
echo form_label('Institución donde estudio:', 'donde');
echo nbs(2);
echo form_input($data23);
echo br(2);
$data13 = array(
              'name'        => 'notas',
              'placeholder' => 'Notas adicionales'
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