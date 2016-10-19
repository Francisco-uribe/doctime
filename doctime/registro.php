<?php
session_start();
$nombre_pagina = "Registro  de pacientes";
$link_pagina = "some.php";
$titulo_pagina = "Registro";
$dia = date('Y-m-d');
include('inc/var_some.php');
include('inc/mainHeader.php');
include('inc/header.php');
?>
<style>
  .padding__input__r{
    padding-right: 0;
  }
  .padding__input__l{
    padding-left: 0;
  }
</style>
<body>
  <!-- formulario -->
  <div class="well col-md-8 col-md-offset-2">
    <form class="form-horizontal">
      <fieldset>
        <legend>Formulario de registro</legend>
        <!-- ingreso de nombre -->
        <div class="form-group"> <!-- method="POST" action="./inc/php_conecciones/registro__some.php"  -->
          <label for="inputNombre" class="col-md-2 control-label">Nombre</label>
          <div class="col-md-9">
            <div class="col-md-3 padding__input__l">
              <input type="text" class="form-control" id="inputNombre1" placeholder="1° Nombre"    autocomplete="off" pattern="[A-Za-z ]{2,15}" required autofocus>
            </div>
            <div class="col-md-3 padding__input__l">
              <input type="text" class="form-control" id="inputNombre2" placeholder="2° Nombre"   autocomplete="off" pattern="[A-Za-z ]{2,15}">
            </div>
            <div class="col-md-3 padding__input__l">
              <input type="text" class="form-control" id="inputNombre3" placeholder="1° Apellido"  autocomplete="off" pattern="[A-Za-z ]{2,15}" required>
            </div>
            <div class="col-md-3 padding__input__l">
              <input type="text" class="form-control" id="inputNombre4" placeholder="2° Apellido" autocomplete="off" pattern="[A-Za-z ]{2,15}" required>
            </div>
          </div>
        </div>
        <!-- ingreso de rut -->
        <div class="form-group">
          <label for="inputRUT" class="col-md-2 control-label">RUT</label>
          <div class="col-md-7">
            <!-- sin digito verificador -->
            <div class="col-md-3 col-xs-8 padding__input__l">
              <input type="text" class="form-control" id="inputRUT" placeholder="11.222.333" maxlength="10" onkeyup="format(this)" onchange="format(this)" autocomplete="off" pattern="[0-9.]{9,10}" required>
            </div>
            <!-- ingreso de rut (digito verificador) -->
            <div class="col-md-2 col-xs-4 padding__input__l">
              <input type="text" class="form-control" id="inputDigito" placeholder="K" maxlength="1" autocomplete="off" pattern="[0-9Kk]" required>
            </div>
          </div>
        </div>
        <!-- ingreso de fecha de nacimiento -->
        <div class="form-group">
          <label for="inputNacimiento" class="col-md-2 control-label">Fecha de nacimiento</label>
          <div class="col-md-7">
            <div class="col-md-8 col-xs-12 padding__input__l">
              <input type="date" class="form-control" id="inputNacimiento" placeholder="dd-mm-aaaa" min="1900-01-01" max="<?php echo $dia; ?>" required>
            </div>
          </div>
        </div>
        <!-- seleccion de sexo -->
        <div class="form-group">
          <label class="col-md-2 control-label">Sexo</label>
          <div class="col-md-7">
            <div class="radio radio-primary">
              <label>
                <input type="radio" name="sexo" id="sexo1" value="Mujer" checked="">
                Femenino
              </label>
            </div>
            <div class="radio radio-primary">
              <label>
                <input type="radio" name="sexo" id="sexo2" value="Hombre">
                Masculino
              </label>
            </div>
          </div>
        </div>
        <!-- seleccion de area -->
        <div class="form-group">
          <label for="selectArea" class="col-md-2 control-label">Sector</label>
          <div class="col-md-3">
            <select id="selectArea" class="form-control">
              <option>Zona A</option>
              <option>Zona B</option>
              <option>Zona C</option>
              <option>Zona D</option>
              <option>Zona E</option>
            </select>
          </div>
        </div>
        <!-- ingresar email -->
        <div class="form-group">
          <label for="inputEmail" class="col-md-2 control-label">Email</label>
          <div class="col-md-7">
            <input type="email" class="form-control" id="inputEmail" placeholder="example@dominio.com" autocomplete="off" required>
          </div>
        </div>
        <!-- ingreso de numero de telefono -->
        <div class="form-group">
          <label for="inputTelefono" class="col-md-2 control-label">Teléfono</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="inputTelefono" placeholder="912345678" maxlength="9" autocomplete="off" pattern="[9]{1}[0-9]{8}" onkeyup="format2(this)" onchange="format2(this)" required title="Numero de 9 digitos que inicie con 9.">
          </div>
        </div>
        <!-- Botones -->
        <div class="form-group">
          <div class="col-md-7 col-md-offset-2">
            <button type="submit" class="btn btn-raised btn-success">Enviar</button>
            <button type="button" class="btn btn-raised btn-info" data-toggle="modal" data-target="#mensaje-contraseña">Contraseña</button>
          </div>
      </fieldset>
    </form>
  </div>
  <!-- mensaje de contraseña // modal // boton informativo-->
  <div id="mensaje-contraseña" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Contraseña</h4>
        </div>
        <div class="modal-body">
          <p>La contraseña para ingresar al sitio por primera vez, es el RUT del usuario, en esa primera sesion se solicitará al usuario cambiar la contraseña.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
</body>
<?php include('inc/footer.php') ?>
