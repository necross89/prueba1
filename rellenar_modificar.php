<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Sistema de estudiantes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/AvantGarde_Bk_BT_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script src="js/jcarousellite.js" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function(){

	  $("a.new_window").attr("target", "_blank");

	  //carousel
	  $(".carousel").jCarouselLite({
		  btnNext: ".next",
		  btnPrev: ".prev"
	  });
	});

</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">
	ie_png.fix('.png, .carousel-box .next img, .carousel-box .prev img');
</script>
<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<div class="tail-top-left"></div>
<div class="tail-top">
<!-- header -->
	<div id="header">
		<div class="row-1">
			<div class="fleft"><a href="index.html"></a></div>
			<div class="fright">
				<ul>
					<!--<li><a href="index.html" class="active">home</a></li>
					<li><a href="about-us.html">about</a></li>
					<li><a href="articles.html">articles</a></li>
					<li><a href="contact-us.html">contacts</a></li>
					<li><a href="sitemap.html">sitemap</a></li>
					-->
				</ul>
			</div>
		</div>
		<div class="row-2"><span><b><img src="images/Sistema.gif" alt="" /></b><br/><b><img src="images/Estudiantes.gif" alt="" /></b></span></div>
	</div>
<!-- content -->
	<div id="content"><div class="inner_copy"></div><div class="inner_copy"></div>
		<div class="row-1">
			<div class="inside">
				<div class="container">
					<div class="aside">
						<h3>Servicios</h3>
						<ul>
							<li>
								<img src="images/pic1.gif" alt="" /><div class="extra-wrap"><span><a href="consultar.php">Consultar</a></span><br/>Consulta la informacion de un estudiante.</div>
							</li>
							<li>
								<img src="images/pic2.gif" alt="" /><div class="extra-wrap"><span><a href="insertar.php">Insertar</a></span><br/>Inserta el registro de un estudiante.</div>
							</li>
							<li>
								<img src="images/pic3.gif" alt="" /><div class="extra-wrap"><span><a href="selec_modificar.php">Modificar</a></span><br/>Modifica los datos de un estudiante.</div>
							</li>
							<li>
								<img src="images/pic4.gif" alt="" /><div class="extra-wrap"><span><a href="eliminar.php">Eliminar</a></span><br/>Elimina el registro de un estudiante.</div>
							</li>
						</ul>
						<!--<div class="wrapper"><a href="#" class="link1"><em><b>Learn More</b></em></a></div>-->
					</div>
					<div class="content">
						<h3>Bienvenido al grupo NutriSoft</h3>
						<p class="txt1">Aqui puedes hacer consultas sobre los estudiantes:</p>

<!-------------------------------------------------------NUESTRO CODIGO------------------------------------------------------------------------>

<?php
    include ("sql_conf.php");
    $sql = "SELECT * FROM estudiante WHERE carnet= '{$_GET['carnet']}'";
    //Conexion a la base de datos
         $link = @mysql_connect($servidor,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
          if ( isset($link) ){
            // Luego mysql_select_db selecciona la base de datos, en este caso llamada "ejemplos"
              $select_db = @mysql_select_db($base_Datos,$link) or die("error al seleccionar la DB".mysql_error());
          }
                //Uso de la funcion ejecutar para mandarle el SQL a la BD.
     $result = @mysql_query($sql,$link) or die ("error al ejecutar el $sql");
                //Cerramos conexion
    mysql_close($link);
    $fila = mysql_fetch_array ($result);
?>

<!-- Este es el formulario -->
<form action="modificar_ejecutar.php" method="post" >
<input type="hidden" name="carnet" value="<?php echo $fila['carnet']?>" >
<table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">Modificar Estudiante</div></td>
  </tr>
  <tr>
    <td>Nombre</td>
    <!-- Aqui es donde pho llena el "valor por defecto" del campo de formulario para que
    este tenga el nombre actual del pais a modificar.-->
    <td><input type="text" name="nombre" value="<?php echo $fila['nombre']  ?>"></td>
  </tr>
  <tr>
    <td>Carne</td>
    <!-- Aqui es donde pho llena el "valor por defecto" del campo de formulario para que
    este tenga el presidente actual del pais a modificar.-->
    <td><input type="text" name="carnet"  value="<?php echo $fila['carnet']  ?>"disabled= true ></td>
  </tr>
  <tr>
    <td>Carrera</td>
    <!-- Aqui es donde pho llena el "valor por defecto" del campo de formulario para que
    este tenga el presidente actual del pais a modificar.-->
    <td><input type="text" name="carrera" value="<?php echo $fila['carrera']  ?>"></td>
  </tr>
  <tr>
    <td>Indice</td>
    <!-- Aqui es donde pho llena el "valor por defecto" del campo de formulario para que
    este tenga el presidente actual del pais a modificar.-->
    <td><input type="text" name="indice" value="<?php echo $fila['indice']  ?>"></td>
  </tr>
  <tr>
    <td>Direccion</td>
    <!-- Aqui es donde pho llena el "valor por defecto" del campo de formulario para que
    este tenga el presidente actual del pais a modificar.-->
    <td><input type="text" name="direccion" value="<?php echo $fila['direccion']  ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
          <input type="submit" value="modificar">
        </div></td>
  </tr>
</table>
</form>

<?php
   // mysql_close($link);
?>

<!-------------------------------------------------------FIN NUESTRO CODIGO-------------------------------------------------------------------->

					</div>
                                    <div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="tail-middle">
			<div class="row-2">
				<div class="inside">
					<h3>Proximos Proyectos</h3>
					<div class="carousel-box">
						<div class="prev"><a href="#"><img src="images/prev.png" alt="" /></a></div>
						<div class="next"><a href="#"><img src="images/next.png" alt="" /></a></div>
						<div class="carousel">
							<ul>
								<li>
									<div class="box">
										<div class="border-top">
											<div class="border-bot">
												<div class="left-top-corner">
													<div class="right-top-corner">
														<div class="right-bot-corner">
															<div class="left-bot-corner">
																<div class="img-box2"><img src="images/slide-img1.jpg" alt="" />
																	<div class="inner">
																		<!--<h4>Business Plans</h4>-->

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="box">
										<div class="border-top">
											<div class="border-bot">
												<div class="left-top-corner">
													<div class="right-top-corner">
														<div class="right-bot-corner">
															<div class="left-bot-corner">
																<div class="inner">
																	<div class="img-box2"><img src="images/slide-img2.jpg" alt="" />
																		<div class="inner">
																			<!--<h4>About Template</h4>-->
																			<!--<p class="extra">Free 1028X768 Optimized Website Template from <a href="#">FreeTemplatesOnline.com!</a> We hope that you like this template and will use for your websites.</p>-->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="box">
										<div class="border-top">
											<div class="border-bot">
												<div class="left-top-corner">
													<div class="right-top-corner">
														<div class="right-bot-corner">
															<div class="left-bot-corner">
																<div class="inner">
																	<div class="img-box2"><img src="images/slide-img3.jpg" alt="" />
																		<div class="inner">
																			<!--<h4>Useful Information</h4>
																			<p>Read this sample article and learn more about the strategic business planning.</p>-->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- footer -->
	<div id="footer">
		<div class="footer">Copyright - Grupo NutriSoft<br />
			<!--<a href="http://www.freetemplatesonline.com/" class="new_window">Free template</a> provided by FreeTemplatesOnline.com.<br />-->
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
