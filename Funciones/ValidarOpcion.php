<?php

$parametro = $_GET['parametro'];
$tipo='';
$baja= date("Ymd H:i", time()-14400);

//ADMINISTRAR PAIS
if($parametro<=2){
    //VARIABLES PARA ABM PAIS
$datoPais = $_GET['codPais'];
$nombrePaisModificar = $_GET['txtPais'];
$estado=$_GET['estadoPais'];
//ALTA DE PAIS
if ($parametro == 0) {

    print("<script>window.location.replace('../GestorPPL/AltaPais.php');</script>");
}
//MODIFICAR PAIS   
if ($parametro == 1) {

    print("<script>window.location.replace('../GestorPPL/ModificarPais.php?codigoPais=$datoPais&txtPais=$nombrePaisModificar&estadoPais=$estado');</script>");
}
//ELIMINAR PAIS
if ($parametro == 2) {
    include("../Funciones/Consultas.php");
    $sqlEliminar="UPDATE PAIS SET HABILITADO='FALSE', BAJA='$baja' WHERE codigoPais='$datoPais'";
    $tipo='pais';
    EliminarDato($sqlEliminar,$tipo);
}
}

//ADMINISTRAR HORARIO
if ($parametro>=3 && $parametro<=5){
    //VARIABLES PARA ABM HORARIO
$horarioModificar= $_GET['codHorario'];
$descHorarioModificar = $_GET['txtDescripcion'];
$estado=$_GET['estadoHorario'];
//ADMINISTRACION DE HORARIOS
//ALTA DE HORARIO
if ($parametro == 3) {
    print("<script>window.location.replace('../GestorHorarios/Alta_Horario.php');</script>");
}

//ELIMINAR HORARIO
if ($parametro == 4) {
    include("../Funciones/Consultas.php");
    $tipo='horarios';
    $sqlEliminar="UPDATE HORARIOS SET HABILITADO='FALSE',BAJA='$baja' WHERE idhorarios='$horarioModificar'";
    EliminarDato($sqlEliminar,$tipo);
}

//MODIFICACION DE HORARIO
if ($parametro == 5) {
    print("<script>window.location.replace('../GestorHorarios/Modificar_Horario.php?codigoHorario=$horarioModificar&DescHorario=$descHorarioModificar&estado=$estado');</script>");
    
}
}

//ADMINISTRAR AFILIADO
if ($parametro>=6 && $parametro<=8){
    //VARIABLES PARA ABM AFILIADO
    $dni= $_GET['dniAfiliado'];

//ALTA DE AFILIADO
if ($parametro == 6) {
    print("<script>window.location.replace('../GestorPersona/Alta_Afiliado.php');</script>");
}

//ELIMINAR AFILIADO
if ($parametro == 7) {
    include("../Funciones/Consultas.php");
    
    $tipo='Afiliado';
    $sqlEliminar="UPDATE PERSONA SET HABILITADO='FALSE',BAJA='$baja' WHERE DNI='$dni'";
    EliminarDato($sqlEliminar,$tipo);
}

//MODIFICACION DE AFILIADO
if ($parametro == 8) {
    $dni= $_GET['dniAfiliado'];
    print("<script>window.location.replace('../GestorPersona/Modificar_Persona.php?dniPersona=$dni');</script>");
    
}
}

?>
