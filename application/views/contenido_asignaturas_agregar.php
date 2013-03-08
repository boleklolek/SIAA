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
	echo form_label('Nombre de asignatura:','nombre'); 
	$data = array(
		'name' => 'nombre',
		'placeholder' => 'Nombre de asignatura'
		);
	echo nbs(2);
	echo form_input($data);
	echo br();
	$data1 = array(
		'name' => 'clave',
		'placeholder' => 'Clave'
		); 
	echo form_label('Clave:', 'clave');
	echo nbs(2);
	echo form_input($data1);
	echo br();
	$data2 = array(
		'name' => 'creditos',
		'placeholder' => 'Créditos'
		); 
	echo form_label('Créditos:', 'creditos');
	echo nbs(2);
	echo form_input($data2);
	echo br();
	echo form_label('Plan:','planes');
	echo nbs(2);
	echo form_dropdown('planes', $planes);
	echo br();
	$data1 = array(
		'name' => 'duracion',
		'placeholder' => 'Duración'
		); 
	echo form_label('Duración:','duracion');
	echo nbs(2);
	echo form_input($data1);
	echo br();
	echo form_label('Tipo Duración:','tipo_duracion');
	echo nbs(2);
	echo form_dropdown('tipo_duracion', $tipo_duracion);
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
