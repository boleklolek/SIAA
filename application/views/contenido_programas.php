<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/programas/listado'?>">Listado</a></li>
		<li><a href="<?php echo site_url().'/programas/agregar'?>">Agregar Nueva</a></li>
		<li><a href="<?php echo site_url().'/programas/reportes'?>">Reportes</a></li>
	</ul>
	</div><div class="span10">
<!--Body content-->
<?php
	echo "<table class='tablitas'><thead><tr><th>Id</th><th>Programa</th><th>Borrar</th></thead><tbody>";
	foreach ($programas->result() as $row)
	{
		echo "<tr><td><a href='".site_url()."/programas/editar/".$row->id."'>".$row->id."</a></td>
   		<td><a href='".site_url()."/programas/editar/".$row->id."'>".$row->nombre."</a></td>
   		<td><a href='".site_url()."/programas/borrar/".$row->id."'><img src='".base_url()."/images/icons/bin.png'></a></td></tr>";
	}
	echo "</tbody></table>";
?>
</div>