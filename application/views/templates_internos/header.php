<?php echo doctype("html5"); ?> 
<html  lang="es"> 
<head> 
	<?php 
	echo meta('charset','utf-8');
	echo link_tag('css/style.css');
	echo link_tag('css/bootstrap.css');
	echo link_tag('css/smoothness/jquery-ui-1.9.2.custom.css');
	echo link_tag('css/datepicker.css');
	?>     
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" 	type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js" type="text/javascript"></script>
	<script src=<?php echo base_url()."js/bootstrap.js"?> type="text/javascript"></script>
	<script src=<?php echo base_url()."js/bootstrap-datepicker.js"?> type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	<script src=<?php echo base_url()."js/jquery.llamadas.js"?> type="text/javascript"></script>

	<title>SIAA // Sistema Integral de Administración de Alumnos</title>
</head>
<body>