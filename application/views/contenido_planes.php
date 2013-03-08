<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/planes/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/planes/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/planes/reportes'?>">Reportes</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
	echo "<table class='tablitas'><thead><tr><th>Id</th><th>Plan</th><th>Programa</th><th>Duraci&oacute;n</th><th>Tipo duraci&oacute;n</th><th>Borrar</th></thead><tbody>";
	foreach ($planes->result() as $row)
	{
		$this->db->where('id',$row->programa);
		$this->db->select('nombre');
		$result = $this->db->get('programas')->row();
		
		$this->db->where('id',$row->tipo_duracion);
		$this->db->select('nombre');
		$tipo_dur = $this->db->get('tipo_duracion')->row();


   		echo "<tr><td><a href='".site_url()."/planes/editar/".$row->id."'>".$row->id."</a></td><td><a href='".site_url()."/planes/editar/".$row->id."'>".$row->nombre."</a></td><td><a href='".site_url()."/planes/editar/".$row->id."'>".$result->nombre."</a></td><td><a href='".site_url()."/planes/editar/".$row->id."'>".$row->duracion."</a></td><td><a href='".site_url()."/planes/editar/".$row->id."'>".$tipo_dur->nombre."</a></td><td><a href='".site_url()."/planes/borrar/".$row->id."'><img src='".base_url()."/images/icons/bin.png'></a></td></tr>";
	}
	echo "</tbody></table>";
?>
</div>