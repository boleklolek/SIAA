<div class="span2">
	<ul class="unstyled">
		<li><a href="<?php echo site_url().'/profesores/editar/'.$profesor->id ?>">Editar personales</a></li>
		<li><a href="<?php echo site_url().'/profesores/academicos'?>">Editar académicos</a></li>
		<li><a href="<?php echo site_url().'/profesores/repote_profesor'?>">Reporte profesor</a></li>
	</ul>
	</div>
<div class="span10">
<!--Body content-->
<?php
	//Aqui checar si hay foto o no del alumno
	echo "<div class='foto_alumno'>";
	if(!file_exists(base_url()."/images/fotos_profesores/".$profesor->id."_profesor_thumb.jpg")){
		echo "<img src='".base_url()."/images/fotos_profesores/".$profesor->id."_profesor_thumb.jpg'>";
	}else{
		echo "<img src='".base_url()."/images/silueta.png'>";
	}
	echo "</div>";
	echo "<h1>".$grado->nombre." ".$profesor->nombre." ".$profesor->apaterno." ".$profesor->amaterno."</h1>";
	echo "<div class='columnas_contenidas'>";
	echo "<div class='resumen_datos'>";
	echo "Telefono 1: ".$profesor->tel1;
	echo br();
	echo "Telefono 2: ".$profesor->tel2;
	echo br();
	echo "Correo: ".$profesor->email;
	echo br();
	echo "Nacionalidad: ".$profesor->nacionalidad;
	echo "</div>";
	echo "<div class='resumen_files'>";
	echo "Excel  <img src='".base_url()."/images/icons/page_excel.png'>";
	echo br();
	echo "PDF  <img src='".base_url()."/images/icons/page_white_acrobat.png'>";
	echo br();
	echo "CV  <img src='".base_url()."/images/icons/page_white.png'>";
	echo "</div>";
	echo "</div>";
	
?>
</div>