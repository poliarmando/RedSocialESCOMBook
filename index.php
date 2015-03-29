<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>ESCOMBook</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  
  
  <link rel="stylesheet" href="http://www.isc.escom.ipn.mx/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/extras/font-awesome.min.css">  
  <link rel="stylesheet" href="css/style.css"> <!-- ESTILOS -->
  
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/bootstrap-modal.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap-modalmanager.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  
		<script type="text/javascript" src="js/alertas/lib/alertify.js"></script>
		<link rel="stylesheet" href="js/alertas/themes/alertify.core.css" />
		<link rel="stylesheet" href="js/alertas/themes/alertify.default.css" />  <!-- Alertas -->
	 	
</head>

<body>

      <div class="container">
        <section class="fondoBlanco">
        <div id="areaTrabajo">
            <div class="row-fluid logos">
              <div class="span6">
                <img src="img/logos/logoSEP.png" border="0" id="logo1">
              </div>
              <div class="span6" align="right">
                <a href="http://www.ipn.mx/" target="_blank">
                  <img src="img/logos/logoIPNGris.png" border="0">
                </a>
              </div>
            </div> <!-- Fin de logos -->
        </div>  <!-- Fin de areaTrabajo -->
       </section>

	</div>
	
	
<section class="gris">
	<div id="areaTrabajo">
		<div class="container">
		
    <div class="pull-right">
      <a href="http://www.ipn.mx/" class="ligasInst" target="_blank">Inicio IPN</a>&nbsp;<span class="blanco">|</span>
      <a href="http://www.ipn.mx/Paginas/Correo-Electronico.aspx" class="ligasInst" target="_blank" title="Correo Institucional">Correo Electrónico</a>&nbsp;<span class="blanco">|</span>
      <a href="http://www.ipn.mx/Paginas/Instalaciones.aspx" class="ligasInst" title="Instalaciones IPN" target="_blank">Instalaciones</a>&nbsp;<span class="blanco">|</span>
      <a href="http://www.ipn.mx/Paginas/Servicios-Medicos.aspx" class="ligasInst" title="Servicios Médicos" target="_blank">Servicios Médicos</a>&nbsp;<span class="blanco">|</span>
      <a href="http://www.ipn.mx/Paginas/Calendario-Escolar-IPN.aspx" class="ligasInst" title="Calendario" target="_blank">Calendario</a>&nbsp;<span class="blanco">|</span>
      <a href="http://www.ipn.mx/Paginas/Contacto.aspx" class="ligasInst" target="_blank">Contacto</a>&nbsp;
    </div><!--/.nav-collapse -->
		</div><!-- Fin div container -->
	</div><!-- Fin del areaTrabajo -->
</section><br>

	<section class="fondoBlanco">
		<div id="areaTrabajo">
				<div class="container">
				<img src="img/logos/logoEscom.png" border="0" usemap="#logoMap" id="logo" title="ESCOM - Escuela Superior de Cómputo">
					<div class="texto-titulo">
					<titulo-inicio> Sistema de Seguimiento a Egresados (ESCOMBook). </titulo-inicio>
				    </div><!--/.nav-collapse -->
				</div>
		</div>
	</section><br>
	
			<input type="button" value="Notificacion correcta" onClick="ok()" /> <br />
			<input type="button" value="Notificacion error" onClick="error()" /><br /><br />
	
	<!-- BOTONES CENTRALES -->
	<center><button data-toggle="modal" type="button" class="btn btn-primary btn-lg" href="#login">Iniciar Sesión</button>
			<button data-toggle="modal" type="button" class="btn btn-primary btn-lg" href="#encuesta">Encuesta</button>
	</center>
	
<!-- LOGIN -->
<div id="login" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h4>Login de Usuario</h4>
  </div>

  <div class="modal-body">
		<form class="form-horizontal" method="get" action="index.php">
		  <div class="control-group">
			<label class="control-label" for="inputEmail">Nombre de Usuario:</label>
			<div class="controls">
			  <input type="text" name="user" placeholder="Usuario">
			 
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			  <input type="password" name="password" placeholder="Password">
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <label class="checkbox">
				<input type="checkbox"> Recuérdame
			  </label>
			  
			</div>
	
		  </div>
		  
<center>¿No recuerdas tu usuario y/o contraseña? 
<a data-toggle="modal"href="#recuperar">Da clic aquí</a>		  
</center>
	  </div>
	  
 <div class="modal-footer">
		<INPUT type="submit" value="Enviar"> 
		<INPUT type="reset"></form>		
 </div>
</div> 

		
		
<!-- FIN LOGIN -->	

<!-- REVISAR SI ESTA PRE-REGISTRADO -->
<div id="revisar" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h4>Verificar Pre-Registro</h4>
  </div>

  <div class="modal-body">
		<form class="form-horizontal" method="get" action="index.php">
		  <div class="control-group">
			<label class="control-label" for="inputCurp">CURP:</label>
			<div class="controls">
			  <input style="text-transform:lowercase" type="text" name="curp" placeholder="CURP"> <!-- Lo convierte a Mayusculas -->
			 
			</div>
		  </div>
		
	  </div>
	  
 <div class="modal-footer">
		<INPUT type="submit" value="Enviar"> 
		<INPUT type="reset"></form>		
 </div>
</div> 

		
<!-- FIN Revisar -->	

<!-- RECUPERAR CONTRASEÑA -->
<div id="recuperar" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h4>Recuperar Datos</h4>
  </div>

  <div class="modal-body">
		<form class="form-horizontal" method="get" action="index.php">
		  <div class="control-group">
			<label class="control-label" for="inputCurp">Correo:</label>
			<div class="controls">
			  <input style="text-transform:lowercase" type="text" name="correo" placeholder="E-mail"> <!-- Lo convierte a Mayusculas -->
			 
			</div>
		  </div>
		
	  </div>
	  
 <div class="modal-footer">
		<INPUT type="submit" value="Recuperar"> 
		<INPUT type="reset"></form>		
 </div>
</div> 

		
<!-- FIN RECUPERAR -->	



<!-- ENCUESTA -->
<div id="encuesta" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h4>Encuesta</h4>
  </div>

  <div class="modal-body">
		<form class="form-horizontal">
		  <div class="control-group">
			<label class="control-label" for="inputEmail">Nombre Completo:</label>
			<div class="controls">
			  <input type="text" id="inputEmail" placeholder="Email">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="inputPassword">Campo1:</label>
			<div class="controls">
			  <input type="password" id="inputPassword" placeholder="Campo1:">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="inputPassword">Campo2:</label>
			<div class="controls">
			  <input type="password" id="inputPassword" placeholder="Campo2:">
			</div>
		  </div>
		  

		  <div class="control-group">
			<label class="control-label" for="inputPassword">Campo3:</label>
			<div class="controls">
			  <input type="password" id="inputPassword" placeholder="Campo3:">
			</div>
		  </div>
		  		  
		  
		
	  </div>
	  
 <div class="modal-footer">
		<button type="submit" class="btn">Enviar Datos</button></form>
 </div>

</div> 
<!-- FIN ENCUESTA -->

	<!-- FIN BOTONES CENTRALES-->	
	
	<!-- INICIO CARRUSEL -->

  <div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">

				   <div class="carousel slide" id="myCarousel">
					<div class="carousel-inner">

						<div class="item active">

							<div class="bannerImage">
								<a href="#"><img src="images/carrusel-1.png" alt=""></a>
							</div>
						</div><!-- /Slide1 --> 

						<div class="item">
							<div class="bannerImage">
								<a href="#"><img src="images/carrusel-2.png" alt=""></a>
							</div>                                              
						</div><!-- /Slide2 -->             

						<div class="item">
							<div class="bannerImage">
								<a href="#"><img src="images/carrusel-3.png" alt=""></a>
							</div>                                                 
						</div><!-- /Slide2 -->                      

					</div>

					<div class="control-box">                            
						<a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
						<a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
					</div><!-- /.control-box -->   

				</div><!-- /#myCarousel -->

		</div><!-- /.span12 -->          
	</div><!-- /.row --> 
</div><!-- /.container -->

<!-- Primer vez -->
<center>
	<h4>Si es la primera vez que entras a la aplicación, revisa si estas en pre-registrado &nbsp
	<button data-toggle="modal" type="button" class="btn btn-primary btn-lg" href="#revisar">Revisar</button>
	</h4><br>	
	</center>

<!--Footer-->
  	<!--Footer-->
  <footer id="footer">
  <center>
    <div class="container">
		<div class="pull-right">	 
		<div class="fb-like" data-href="https://www.facebook.com/escom.iscipn.9" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>		 
		</div><br><br>

		<div class="pull-right">     
				 <p class="guinda center">Escuela Superior de Cómputo.</p>
				 <p class="center">Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito del Director General del Instituto.<br>
					® 2015
				</p> 
				
		</div>  		
         
        </div>
       
        <!--/Copyright-->
      </div>
    </div>
  </footer>
<!--/Footer-->  <!--/Footer-->

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
  <script src="js/index.js"></script>

</body>

<script>
			function ok(){
				alertify.success("Correcto"); 
				return false;
			}
			function error(){
				alertify.error("Incorrecto"); 
				return false; 
			}
		</script>			

</html>