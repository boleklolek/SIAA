<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/planes/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/planes/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/planes/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10"> 
	<!--Body content--> 
	<?php echo form_open('planes/guardar'); 
	echo form_label('Nombre del plan:','nombre'); 
	$data = array(
		'name' => 'nombre',
		'placeholder' => 'Nombre del plan'
		); 
	echo nbs(2);
	echo form_input($data);
	echo br();
	echo form_label('Programa:','programa');
	echo nbs(2);
	echo form_dropdown('programa', $programas);
	echo br();
	echo form_label('Duración:','duracion'); 
	$data1 = array(
		'name' => 'duracion',
		'placeholder' => 'Duraci&oacute;n'
		); 
	echo nbs(2);
	echo form_input($data1);
	echo br();
	echo form_label('Tipo duración:','tipo_duracion');
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
