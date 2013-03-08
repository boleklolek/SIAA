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
	echo "<p>Alumnos</p>
	<table class='tablitas'>
	<thead>
	<tr>
	<th>Id</th>
	<th>Programa</th>
	<th>Plan</th>
	<th>Nombre</th>
	<th>Apellido paterno</th>
	<th>Apellido materno</th>
	<th>Editar</th>
	<th>Borrar</th>
	</tr>
	</thead>
	<tbody>";
	foreach ($alumnos->result() as $row)
	{
		$this->db->where('id',$row->programa);
		$this->db->select('nombre');
		$programa = $this->db->get('programas')->row();
		
		$this->db->where('id',$row->plan);
		$this->db->select('nombre');
		$plan = $this->db->get('planes')->row();
   		
   		echo "<tr>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$row->id."</a></td>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$programa->nombre."</a></td>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$plan->nombre."</a></td>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$row->nombre."</a></td>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$row->apaterno."</a></td>
   		<td><a href='".site_url()."/alumnos/detalles/".$row->id."'>".$row->amaterno."</a></td>
   		<td><a href='".site_url()."/alumnos/editar/".$row->id."'><img src='".base_url()."/images/icons/user_edit.png'></a></td>
   		<td><a href='".site_url()."/alumnos/borrar/".$row->id."'><img src='".base_url()."/images/icons/user_delete.png'></a></td>
   		</tr>";
	}
	echo "</tbody></table>";

?>
</div>