<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>    
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../Funciones/Funciones.php"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Gestion de Turno</b> </div>

            <form class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">

                    <div class="panel panel-default" align="center" style="overflow-x:auto;">


                        <div class="panel-heading">
                            <h3>Busqueda por Profesional</h3>
                        </div>

                        <div id="divprofesional">
                            Seleccione profesional:
                            <select id="cmbProfesional"></select>

                            <input type="button" name="btnMostrarAgenda" id="MostrarAgenda" class="btn btn-default" style="margin-left: 09px;" value="Mostrar Agenda">

                        </div>

                        <div class="panel-heading">
                            <h3>Agenda</h3>
                        </div>

                        <div id="divAgendaProf">
                            <table id="tbAgenda" class="table table-fixed" style="font-size: 11">

                                <thead>
                                <th>Horario   /   Dia</th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miercoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                                

                                </thead>
                                
                                <tbody id="tbcuerpoAgenda">
                                    
                                    <tr><td> 09:00 - 09:30 </td></tr><tr><td> 09:30 - 10:00 </td></tr><tr><td> 10:30 - 11:00 </td></tr><tr><td> 11:30 - 12:00 </td></tr><tr><td> 12:30 - 13:00 </td></tr><tr><td> 13:30 - 14:00 </td></tr><tr><td> 14:30 - 15:00 </td></tr><tr><td> 15:30 - 16:00 </td></tr><tr><td> 16:30 - 17:00 </td></tr><tr><td> 17:30 - 18:00 </td></tr><tr><td> 18:30 - 19:00 </td></tr>
                                    
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </form>
            <div class="row-md-1" align="center" style="margin-top: 10px;">

                <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=6">Agregar Turno</a></button>

                <button class="btn btn-danger" style="margin-left: 10px;"><a href="Inicio_usuario.php">Volver Menu</a></button>
            </div>

            <footer class="footer-distributed">

                <div class="footer-left">

                    <h3> <img src="../Imagenes/reserva_ya.JPG" width="100px"> </h3>

                    <p class="footer-links">
                        <a href="">Home</a>
                        ·
                        <a href="index.php">Personal</a>					
                        ·
                        <a href="#">About</a>
                        ·
                        <a href="#">Faq</a>
                        ·
                        <a href="#">Contact</a>
                    </p>

                    <p class="footer-company-name">RESERVAYA Todos los derechos reservados. Tèrminos y condiciones @ 2016</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Sin numero</span> Mendoza, Argentina</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>0261-156406854</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:tobares.cristian@gmail.com">tobares.cristian@gmail.com</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About the company</span>
                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>

                    <div class="footer-icons">

                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>

                    </div>

                </div>

            </footer>
        </div>

    </body>
</html>

