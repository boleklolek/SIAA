<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/profesores/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/profesores/agregar'?>">Agregar Nuevo</a></li>
		<li><a href="<?php echo site_url().'/profesores/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
	echo "<table class='tablitas'>
	<thead>
	<tr>
	<th>Id</th>
	<th>Estatus</th>
	<th>Grado</th>
	<th>Nombre</th>
	<th>Editar</th>
	<th>Borrar</th>
	</tr>
	</thead>
	<tbody>";
	foreach ($profesores->result() as $row)
	{
		$this->db->where('id',$row->status);
		$this->db->select('nombre');
		$result = $this->db->get('estatus')->row();
		
		$this->db->where('id',$row->grado);
		$this->db->select('nombre');
		$grade = $this->db->get('grados')->row();
   		
   		echo "<tr>
   		<td><a href='".site_url()."/profesores/detalles/".$row->id."'>".$row->id."</a></td>
   		<td><a href='".site_url()."/profesores/detalles/".$row->id."'>".$result->nombre."</a></td>
   		<td><a href='".site_url()."/profesores/detalles/".$row->id."'>".$grade->nombre."</a></td>
   		<td><a href='".site_url()."/profesores/detalles/".$row->id."'>".$row->nombre." ".$row->apaterno." ".$row->amaterno."</a></td>
   		<td><a href='".site_url()."/profesores/editar/".$row->id."'><img src='".base_url()."/images/icons/user_edit.png'></a></td>
   		<td><a href='".site_url()."/profesores/borrar/".$row->id."'><img src='".base_url()."/images/icons/user_delete.png'></a></td>
   		</tr>";
	}
	echo "</tbody></table>";
?>
</div>