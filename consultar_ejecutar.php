<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Sistema de Estudiantes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Sistema de administración de datos de alumnos" />
        <meta name="keywords" content="put, your, keyword, here" />
        <meta name="author" content="Grupo Nutrisoft 2010" />
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

    </head>
    <body id="page1">
        <div class="tail-top-left"></div>
        <div class="tail-top">
        <!-- header: Cabezera de la pagina -->
            <div id="header">
                <div class="row-1">
                    <div class="fleft"><img src="images/logo.gif" alt="" /></div>
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
            <!-- content: Zona de contenido -->
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
                                        <img src="images/pic3.gif" alt="" /><div class="extra-wrap"><span><a href="modificar.php">Modificar</a></span><br/>Modifica los datos de un estudiante.</div>
                                    </li>
                                    <li>
                                        <img src="images/pic4.gif" alt="" /><div class="extra-wrap"><span><a href="eliminar.php">Eliminar</a></span><br/>Elimina el registro de un estudiante.</div>
                                    </li>
                                </ul>
                            <!--<div class="wrapper"><a href="#" class="link1"><em><b>Learn More</b></em></a></div>-->
                            </div>
                            <div class="content">
                                    <h3>Bienvenido al Grupo NutriSoft ©</h3>
                                    <p class="txt1">En este sistema podrá administrar fácil y cómodamente los datos de los estudiantes.</p>
                            </div>

    <!-------------------------------------- INICIO DE NUESTRO CODIGO -------------------------------------->
                            <div class="text3 p">

                                <!-- Codigo HTML para crear el encabezado de la tabla -->
                                <table width="600" border="3" cellspacing="3" cellpadding="4">
                                    <tr>
                                        <td><b>Nombre</b></td>
                                        <td><b>Carnet</b></td>
                                        <td><b>Carrera</b></td>
                                        <td><b>Indice</b></td>
                                        <td><b>Direccion</b></td>
                                    </tr>

                                    <!-- En esta parte PHP va cargando la tabla de la base de datos y va escribiendo en HTML
                                    la tabla llena con su respectiva informacion -->
                                    <?php
                                        include ("class_Fachada.php");
                                        $contador=0;
                                        $caja = Fachada::retF();

                                        if (isset($_POST['c_nombre']) or isset($_POST['c_carnet']) or isset($_POST['c_carrera']) or isset($_POST['c_indice']) or isset($_POST['c_direccion'])){
                                            echo "Si hay algo seleccionado";
                                            if (isset($_POST['c_nombre'])){
                                                $nombre_envio = $_POST['nombre'];
                                            }
                                            elseif(not (isset($_POST['c_nombre']))){
                                                $nombre_envio = "";
                                            }
                                            if (isset($_POST['c_carnet'])){
                                                $carnet_envio = $_POST['carnet'];
                                            }
                                            elseif (!(isset($_POST['c_carnet']))){
                                                $carnet_envio = "";
                                            }
                                            if (isset($_POST['c_carrera'])){
                                                $carrera_envio = $_POST['carrera'];
                                            }
                                            elseif (!(isset($_POST['c_carrera']))){
                                                $carrera_envio = "";
                                            }
                                            if (isset($_POST['c_indice'])){
                                                $indice_envio = $_POST['indice'];
                                            }
                                            elseif (!(isset($_POST['c_indice']))){
                                                $indice_envio = 0;
                                            }
                                            if (isset($_POST['c_direccion'])){
                                                $direccion_envio = $_POST['direccion'];
                                            }
                                            elseif (!(isset($_POST['c_direccion']))){
                                                $direccion_envio = "";
                                            }

                                            //Esta es la consulta a la BD, pedida a través de la fachada

                                            $lista = $caja-> Consultar_condiciones($nombre_envio, $carnet_envio, $carrera_envio, $indice_envio, $direccion_envio);

                                            //Aqui va llenando la tabla fila por fila
                                            foreach ($lista as $ele=>$valor){
                                    ?>

                                    <!-- Aunque esta parte esta en HTML sigue dentro del while -->
                                    <tr>
                                        <td><?php echo $valor-> nombre1() ?></td>
                                        <td><?php echo $valor-> carnet1() ?></td>
                                        <td><?php echo $valor-> carrera1() ?></td>
                                        <td><?php echo $valor-> indice1() ?></td>
                                        <td><?php echo $valor-> direccion1() ?></td>
                                    </tr>
                                    <!-- Aqui se cierra el ciclo-->
                                    <?php   }
                                        }
                                        else {
                                            //echo "NO hay nada seleccionado";
                                            $lista = $caja-> Consultar();
                                            if(count($lista)!=0){
                                               foreach ($lista as $ele=>$valor){
                                    ?>

                                    <!-- Aunque esta parte esta en HTML sigue dentro del while -->
                                    <tr>
                                        <td><?php echo $valor-> nombre1() ?></td>
                                        <td><?php echo $valor-> carnet1() ?></td>
                                        <td><?php echo $valor-> carrera1() ?></td>
                                        <td><?php echo $valor-> indice1() ?></td>
                                        <td><?php echo $valor-> direccion1() ?></td>
                                    </tr>
                                    <!-- Aqui se cierra el ciclo-->
                                    <?php      }
                                            }
                                        }
                                      
                                    ?>
                                </table>
                            </div>
    <!--------------------------------------FIN DE NUESTRO CODIGO -------------------------------------->
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
                                                                                    <!--<h4>About Template</h4>
                                                                                    <p class="extra">Free 1028X768 Optimized Website Template from <a href="#">FreeTemplatesOnline.com!</a> We hope that you like this template and will use for your websites.</p>-->
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
            <!-- footer: Pie de la pagina -->
            <div id="footer">
                <div class="footer">Copyright 2010 - Grupo NutriSoft ©<br />
                    <!--a href="http://www.freetemplatesonline.com/" class="new_window">Free template</a> provided by FreeTemplatesOnline.com.<br /-->
                </div>
            </div>
        </div>
    </body>
</html>
