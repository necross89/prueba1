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
                                    <p class="txt1">En este sistema podrá administrar fácil y cómodamente los datos de los estudiantes.
                                        <br><br>Seleccione una de las operaciones de datos para comenzar.
                                        <br><br>Las operaciones las puede encontrar en el panel lateral
                                    </p>
                            
    <!-------------------------------------- INICIO DE NUESTRO CODIGO -------------------------------------->
                            <div class="text3 p">
                                <?php
                                    switch ($_GET['msg']) {
                                    case 'ins_ok':
                                            echo "El registro se ha insertado con exito";
                                    break;
                                    case 'mod_ok':
                                            echo "El registro se ha modificado con exito";
                                    break;
                                    case 'del_ok':
                                            echo "El registro se ha borrado con exito";
                                    break;
                                    case 'ins_inc':
                                        echo "Error al Insertar";
                                    break;
									case 'mod_inc':
                                        echo "Error al Modificar";
                                    break;
                                    }
                                    print('<br><input type="button" value="Aceptar" onClick="document.location.href='."'index.php'".'"><br>');
                                ?>
                            </div>
    <!--------------------------------------FIN DE NUESTRO CODIGO -------------------------------------->
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