<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/planes/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/planes/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/planes/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10"> 
	<!--Body content--> 
	<?php echo form_open('planes/actualizar'); 
	echo form_hidden('id', $datos_planes->id);
	echo form_label('Nombre del plan:','nombre');
	echo nbs(2);
	echo form_input('nombre',$datos_planes->nombre);
	echo br();
	echo form_label('Programa:','programa');
	echo nbs(2);
	echo form_dropdown('programa', $programas, set_value('programa', (isset($datos_planes->programa)) ? $datos_planes->programa : ''));
	echo br();
	echo form_label('Duración:','duracion');
	echo nbs(2);
	echo form_input('duracion',$datos_planes->duracion);
	echo br();
	echo form_label('Tipo duración:','tipo_duracion');
	echo nbs(2);
	echo form_dropdown('tipo_duracion', $tipo_duracion, set_value('tipo_duracion', (isset($datos_planes->tipo_duracion)) ? $datos_planes->tipo_duracion : ''));
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
