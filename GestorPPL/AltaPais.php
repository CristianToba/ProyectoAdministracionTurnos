<?php
session_start();

if ($_SESSION['login_user'] == '') {
header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>
<html>
    <head>
        <!--Cabecera-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../Funciones/Validaciones.js"></script>

    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Alta Pais</b> </div>
            <!--Consultar Pais 
            <div class="panel-heading"> <b>Alta de Pais</b> </div>
            -->
            <FORM name ="formulario" METHOD="POST" action = "../GestorPPL/AltaModPais.php?valor=0" class="form-inline">
                <div class="panel-body">
                    <div class="row-md-1" align="center" style="margin-top: 10px;">

                        Nombre del Pais: <input TYPE ="text" NAME="txtPais" class="form-control"  onKeyPress="return ValidaCadena(event)" ID="Pais" placeholder="Ingresar Pais" required>    

                    </div>

                    <div class="row-md-2" align="center" style="margin-top: 10px;">
                       
                        <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">

                        <input type="button" value="Salir" onclick = "location = '../Vista/AdministrarPais.php'" name="Salir" class="btn btn-danger" style="margin-top: 10px;"> 

                    </div>
                </div>
            </form>

        </div>
        <div class="panel-footer">
            <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
        </div>
    </body>
</html>
