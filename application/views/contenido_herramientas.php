<div class="span2">
	
	<li  class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Programas<b class="caret"></b></a>
	    <ul class="dropdown-menu pull-right">
    		<li><a href="<?php echo site_url().'/programas/listado'; ?>">Listado</a></li>
    		<li><a href="<?php echo site_url().'/programas/agregar'; ?>">Agregar nuevo</a></li>
	    </ul>	
	</li>
	
	<li  class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Planes<span class="caret"></span></a>
    <ul class="dropdown-menu pull-right" role="menu">
    <li><a href="<?php echo site_url().'/planes/listado'; ?>">Listado</a></li>
    <li><a href="<?php echo site_url().'/planes/agregar'; ?>">Agregar nuevo</a></li>
    </ul>
	</li>

	<li  class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Becas<span class="caret"></span></a>
    <ul class="dropdown-menu  pull-right" role="menu">
    <li>Listado</li>
    <li>Agregar nuevo</li>
    </ul>
	</li>

	<li  class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
    <ul class="dropdown-menu pull-right" role="menu">
    <li><a href="<?php echo site_url().'/usuarios/listado'; ?>">Listado</a></li>
    <li><a href="<?php echo site_url().'/usuarios/agregar'; ?>">Agregar nuevo</a></li>
    </ul>
	</li>

	</div>
<div class="span10">
<!--Body content-->
<?php
	// echo "<table class='tablitas'>
	// <thead>
	// <tr>
	// <th>Id</th>
	// <th>Estatus</th>
	// <th>Nombre</th>
	// <th>Borrar</th>
	// </tr>
	// </thead>
	// <tbody>";
	// foreach ($asignaturas->result() as $row)
	// {
	// 	// $this->db->where('id',$row->plan);
	// 	// $this->db->select('nombre');
	// 	// $result = $this->db->get('planes')->row();
		
	// 	// $this->db->where('id',$row->duracion_tipo);
	// 	// $this->db->select('nombre');
	// 	// $tipo_dur = $this->db->get('tipo_duracion')->row();
   		
 //   		echo "<tr>
 //   		<td>".$row->id."</td>
 //   		<td>".$row->nombre."</td>
 //   		<td>".$result->nombre."</td>
 //   		<td><a href='".site_url()."/asignaturas/borrar/".$row->id."'><img src='".base_url()."/images/icons/bin.png'></a></td>
 //   		</tr>";
	// }
	// echo "</tbody><table>";
?>
</div>