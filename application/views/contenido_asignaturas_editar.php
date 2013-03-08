<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/asignaturas/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/asignaturas/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/asignaturas/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10"> 
	<!--Body content--> 
	<?php echo form_open('asignaturas/guardar'); 
	echo form_hidden('id', $datos_asignatura->id);
	echo form_label('Nombre de asignatura:','nombre'); 
	echo form_input('nombre',$datos_asignatura->nombre);
	echo br();
	echo form_label('Clave:', 'clave');
	echo form_input('clave', $datos_asignatura->clave);
	echo br();
	echo form_label('C&eacute;ditos', 'creditos');
	echo form_input('creditos',$datos_asignatura->creditos);
	echo br();
	echo form_label('Plan:','planes');
	echo form_dropdown('planes', $planes, set_value('planes', (isset($datos_asignatura->plan)) ? $datos_asignatura->plan : ''));
	echo br();
	echo form_label('Duraci&oacute;n:','duracion');
	echo form_input('tipo_duracion',$datos_asignatura->duracion);
	echo form_label('Tipo Duraci&oacute;n:','tipo_duracion');
	echo form_dropdown('tipo_duracion', $tipo_duracion, set_value('tipo_duracion', (isset($datos_asignatura->tipo_duracion)) ? $datos_asignatura->tipo_duracion : '')););
	echo br();
	$atri = array(
		'class'=>'btn btn-large btn-primary',
		'name'=>'submit',
		'value'=>'Guardar'
		); 
	echo form_submit($atri); 
	echo form_close(); 
	?> 
</div>
