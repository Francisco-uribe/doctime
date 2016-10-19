<?php
  session_start();
  $titulo_pagina = "Administrador";
  $nombre_pagina = "Pagina Administrativa";
  $link_pagina = "admin.php";
  include('inc/mainHeader.php');
  include('inc/var_admin.php');
  include('inc/header.php');
?>
<style >
  .panel-body{
    padding-top: 5px !important;
    padding-bottom: 5px !important;
  }
  .nav>li>a {
    padding: 0;
  }
</style>

<body>
<!--
  colocar aqui abajo los links
-->
  <div class="well col-md-6 col-md-offset-3" style="padding-top: 40px">
    <center>

      <!-- paginas globales -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Paginas Globales</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="index.php">Login</a></li>
            <li><a href="registro.php">Registro de pacientes</a></li>
          </ul>
        </div>
      </div>

      <!-- Paginas del medico -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Paginas</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="perfil-medico.html">Perfil Medico</a></li>
              <li><a href="perfil-paciente.html">Perfil Paciente</a></li>
                <li><a href="buscar-pacienteS.html">Some</a></li>
          </ul>
        </div>
      </div>




    </center>
  </div>
</body>
<?php include('inc/footer.php') ?>
