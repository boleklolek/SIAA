<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/asignaturas/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/asignaturas/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/asignaturas/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
	echo "<table class='tablitas'>
	<thead>
	<tr>
	<th>Id</th>
	<th>Nombre</th>
	<th>Plan</th>
	<th>Borrar</th>
	</tr>
	</thead>
	<tbody>";
	foreach ($asignaturas->result() as $row)
	{
		$this->db->where('id',$row->plan);
		$this->db->select('nombre');
		$result = $this->db->get('planes')->row();
		
		// $this->db->where('id',$row->duracion_tipo);
		// $this->db->select('nombre');
		// $tipo_dur = $this->db->get('tipo_duracion')->row();
   		
   		echo "<tr>
   		<td><a href='".site_url()."/planes/editar/".$row->id."'>".$row->id."</a></td>
   		<td><a href='".site_url()."/planes/editar/".$row->id."'>".$row->nombre."</a></td>
   		<td><a href='".site_url()."/planes/editar/".$row->id."'>".$result->nombre."</a></td>
   		<td><a href='".site_url()."/asignaturas/borrar/".$row->id."'><img src='".base_url()."/images/icons/bin.png'></a></td>
   		</tr>";
	}
	echo "</tbody></table>";
?>
</div>