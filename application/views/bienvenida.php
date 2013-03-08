  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url().'/admin'; ?>">SIAA</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href='<?php echo site_url()."/siaa_login/logout" ?>' class="navbar-link">Salir</a>
            </p>
            <p class="navbar-text pull-right">
              Entro como <a href="#" class="navbar-link"><?php echo $this->session->userdata['username']; ?></a>
            </p>
            <ul class="nav">
              <li><a href="<?php echo site_url().'/profesores/listado'; ?>">Profesores</a></li>
              <li><a href="<?php echo site_url().'/alumnos/listado'; ?>">Alumnos</a></li>
              <li><a href="<?php echo site_url().'/asignaturas/listado'; ?>">Asignaturas</a></li>
              <li><a href="<?php echo site_url().'/inscripcion/'; ?>">Inscripcion</a></li>
              <li><a href="<?php echo site_url().'/herramientas/'; ?>">Herramientas</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="row-fluid">
	<!--Sidebar content
	<div class="span2">
	</div>-->
<?php $this->load->view($contenido);?>
</div>