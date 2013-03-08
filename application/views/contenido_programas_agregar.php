<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/programas/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/programas/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/programas/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
echo form_open('programas/guardar');
echo form_label('Nombre del programa:','nombre');
$data = array(
              'name'        => 'nombre',
              'placeholder' => 'Nombre del programa'
            );
echo form_input($data);
echo br();
$atri = array('class'=>'btn btn-large btn-primary', 'name'=>'submit','value'=>'Guardar');
echo form_submit($atri);
echo form_close();
?>
</div>