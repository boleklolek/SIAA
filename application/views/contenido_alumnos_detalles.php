<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/alumnos/editar/'.$alumno->id ?>">Editar personales</a></li>
		<li><a href="<?php echo site_url().'/alumnos/academicos/'.$alumno->id?>">Editar académicos</a></li>
		<li><a href="<?php echo site_url().'/alumnos/repote_alumno'?>">Reporte alumno</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
	//Aqui checar si hay foto o no del alumno
	echo "<div class='foto_alumno'>";
	if(!file_exists(base_url()."/images/fotos_alumnos/".$alumno->id."_alumno_thumb.jpg")){
		echo "<img src='".base_url()."/images/fotos_alumnos/".$alumno->id."_alumno_thumb.jpg'>";
	}else{
		echo "<img src='".base_url()."/images/silueta.png'>";
	}
	echo "</div>";
	echo "<h4>".$programa->nombre." -- ".$plan->nombre."</h4>";
	echo "<h1>".$alumno->nombre." ".$alumno->apaterno." ".$alumno->amaterno."</h1>";
	echo "<div class='columnas_contenidas'>";
	echo "<div class='resumen_datos'>";
	echo "Calle: ".$alumno->domicilio;
	echo br();
	echo "Colonia: ".$alumno->colonia;
	echo br();
	echo "Delegación: ".$alumno->delegacion;
	echo br();
	echo "Codigo Postal: ".$alumno->cp;
	echo br();
	echo "Estado: ".$alumno->estado;
	echo br();
	echo "Telefono 1: ".$alumno->tel1;
	echo br();
	echo "Telefono 2: ".$alumno->tel2;
	echo br();
	echo "Correo: ".$alumno->email;
	echo br();
	echo "Nacionalidad: ".$alumno->nacionalidad;
	echo "</div>";
	echo "<div class='resumen_files'>";
	echo "Excel  <img src='".base_url()."/images/icons/page_excel.png'>";
	echo br();
	echo "<a href='".site_url()."/alumnos/pdf/".$alumno->id."'>PDF<img src='".base_url()."/images/icons/page_white_acrobat.png'></a>";
	echo br();
	echo "<a href='".base_url()."archivos/cv_alumnos/".$alumno->id."_alumno.pdf' > CV  <img src='".base_url()."/images/icons/page_white.png'></a>";
	echo "</div>";
	echo "</div>";
	
?>
</div>