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
echo form_open_multipart('alumnos/guardar_academicos');
echo form_label('Número de cuenta:', 'no_cuenta');
echo nbs(2);
echo form_input('no_cuenta');
echo br();
echo form_label('Número de expediente:', 'no_expediente');
echo nbs(2);
echo form_input('no_expediente');
echo br();
echo form_label('Tutor:', 'tutor');
echo nbs(2);
echo form_dropdown('tutor', $tutores);
echo br();
echo form_label('Graduado por:', 'graduado');
echo nbs(2);
echo form_dropdown('graduado', $tipo_graduacion);
echo br();
echo form_label('Fecha de obtención de grado:','fecha_obtencion');
$data = array(
              'name'        => 'fecha_obtencion',
              'placeholder' => '0000-00-00',
              'class' => 'datepicker',
              'data-date-format'=>"yyyy-mm-dd"
            );
echo nbs(2);
echo form_input($data);
echo br();
echo form_label('Título de tesis:', 'nombre_tesis');
$data1 = array(
              'name'        => 'nombre_tesis',
              'placeholder' => 'Título de tesis'
            );
echo nbs(2);
echo form_input($data1);
echo br(2);
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>