<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="./dist/css/ripples.css">

    <link href="https://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">

    <!-- css principal -->
    <link rel="stylesheet" href="css/master.css">

    <!-- icono web -->
    <link rel="shortcut icon" href="./inc/img/logo.png">

    <title></title>
  </head>
<body>
	<div class="row fade__">
		<div class="col-md-4 col-md-offset-4">
			<center><img id="logo" src="./inc/img/logito.png" alt="logo" class="img-circle" width="170" height="140"/></center>
		</div>
	</div>
	<div class="row fade__">
		<div class="well col-md-4 col-md-offset-4">
			<form class="form-horizontal" method="POST" action="./inc/php_conecciones/login__.php">
				<fieldset>
					<!-- ingreso de rut -->
					<div class="form-group" style="margin-top: 15px;">
						<!-- sin digito verificador -->
						<label for="inputRUT" class="col-md-3 control-label">RUT</label>
						<div class="col-md-8">
							<input type="text" name="usuario" class="form-control" id="inputRUT" placeholder="11.222.333" maxlength="10" onkeyup="format(this)" onchange="format(this)" autocomplete="off" pattern="[0-9.]{9,10}" required title="Ingresa su rut sin digito verificador. Solo numeros.">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-md-3 control-label">Contraseña</label>
						<div class="col-md-8">
							<input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Ingrese su contraseña" pattern="[0-9A-Za-z]{6,12}" title="Numeros letras minusculas y mayusculas."required>
						</div>
					</div>
					<div class="form-group" id="recordar">
						<div class="col-md-offset-2 col-md-7">
							<center>
								<div class="togglebutton">
									<label>
										<input type="checkbox"> ¡Recuerdame!
									</label>
								</div>
							</center>
						</div>
					</div>
					<div class="form-group id="div__boton"">
						<div class="col-md-8 col-md-offset-2">
							<center><button type="submit" class="btn btn-primary">Entrar</button></center>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
  (function () {

    var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function () {
      var index = $('.bs-component').index($(this).parent());
      $.get(window.location.href, function (data) {
        var html = $(data).find('.bs-component').eq(index).html();
        html = cleanSource(html);
        $("#source-modal pre").text(html);
        $("#source-modal").modal();
      })

    });

    $('.bs-component [data-toggle="popover"]').popover();
    $('.bs-component [data-toggle="tooltip"]').tooltip();

    $(".bs-component").hover(function () {
      $(this).append($button);
      $button.show();
    }, function () {
      $button.hide();
    });

    function cleanSource(html) {
      var lines = html.split(/\n/);

      lines.shift();
      lines.splice(-1, 1);

      var indentSize = lines[0].length - lines[0].trim().length,
          re = new RegExp(" {" + indentSize + "}");

      lines = lines.map(function (line) {
        if (line.match(re)) {
          line = line.substring(indentSize);
        }

        return line;
      });

      lines = lines.join("\n");

      return lines;
    }

    $(".icons-material .icon").each(function () {
      $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
    });

  })();

</script>
<script src="./dist/js/ripples.min.js"></script>
<script src="./dist/js/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script src="https://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80431047-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Open source code -->
<script>
  window.page = window.location.hash || "#about";

  $(document).ready(function () {
    if (window.page != "#about") {
      $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
    }
  });

  $(window).on("resize", function () {
    $("html, body").height($(window).height());
    $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
    $(".pages").height($(window).height());
  }).trigger("resize");

  $(".menu li").click(function () {
    // Menu
    if (!$(this).data("target")) return;
    if ($(this).is(".active")) return;
    $(".menu li").not($(this)).removeClass("active");
    $(".page").not(page).removeClass("active").hide();
    window.page = $(this).data("target");
    var page = $(window.page);
    window.location.hash = window.page;
    $(this).addClass("active");


    page.show();

    var totop = setInterval(function () {
      $(".pages").animate({scrollTop: 0}, 0);
    }, 1);

    setTimeout(function () {
      page.addClass("active");
      setTimeout(function () {
        clearInterval(totop);
      }, 1000);
    }, 100);
  });

  function cleanSource(html) {
    var lines = html.split(/\n/);

    lines.shift();
    lines.splice(-1, 1);

    var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

    lines = lines.map(function (line) {
      if (line.match(re)) {
        line = line.substring(indentSize);
      }

      return line;
    });

    lines = lines.join("\n");

    return lines;
  }

  $(".opensource").click(function () {
    $.get(window.location.href, function (data) {
      var html = $(data).find(window.page).html();
      html = cleanSource(html);
      $("#source-modal pre").text(html);
      $("#source-modal").modal();
    });
  });
</script>

<!-- Sliders -->
<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

<script type='text/javascript'>
function format(input)
{
  var num = input.value.replace(/\./g,'');
  if(!isNaN(num)){
    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    num = num.split('').reverse().join('').replace(/^[\.]/,'');
    input.value = num;
  }

  else{
    //alert('Solo se permiten numeros');
    input.value = input.value.replace(/[^\d\.]*/g,'');
  }
}

function format2(input)
{
  var num = input.value.replace(/\./g,'');
  if(isNaN(num)){
    input.value = input.value.replace(/[^\d\.]*/g,'');
  }
}

// funciones para buscar-medico.php
function ver_dentistas(){
  var a = document.getElementById("btn-m").className;
  if(a == "active"){
    document.getElementById('btn-m').className="-";
    document.getElementById('btn-d').className="active";
    document.getElementById("medicos2").style.display="block";
    document.getElementById("medicos").style.display="none";
  }
}
function ver_medicos(){
  var a = document.getElementById("btn-d").className;
  if(a == "active"){
    document.getElementById('btn-m').className="active";
    document.getElementById('btn-d').className="-";
    document.getElementById("medicos2").style.display="none";
    document.getElementById("medicos").style.display="block";
  }
  // funciones para buscar-medico.php
}

</script>

</html>
