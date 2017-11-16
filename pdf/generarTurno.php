<?php

require_once('class.ezpdf.php');
?parametroNA="+parametroNA+"& parametroAA=" + parametroAA+ " & parametroNP=" + parametroNP +
                     " & parametroAP=" + parametroAP+" & parametroE=" +parametroE+" & parametroF="+ parametroF+" & parametroH=" + parametroH+" & parametroMP= " + parametroMP + "
$parametroAA = $_GET['parametroAA'];
$parametroNA = $_GET['parametroNA'];
$parametroNP = $_GET['parametroNP'];
$parametroAP = $_GET['parametroAP'];
$parametroE = $_GET['parametroE'];
$parametroF = $_GET['parametroF'];
$parametroH = $_GET['parametroH'];
$parametroMP = $_GET['parametroMP'];

$sql = "SELECT descripcion,substring(CONVERT(char(19),start,114),1,5) as start, substring(CONVERT(char(19),[end],114),1,5) as [end], habilitado FROM  HORARIOS";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('descripcion' => '<b>DESCRIPCION</b>', 'start' => '<b>HORARIO INICIO</b>', 'end' => '<b>HORARIO FIN</b>', 'Habilitado' => '<b>HABILITADO</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);

$titulo = 'LISTADO DE HORARIOS';
while ($row = sqlsrv_fetch_array($resSql)) {
    
    if ($row[3]==1) {
        $hab='Si';
    }  else {
        $hab='No';
    }
    $data[] = array('descripcion' => $row[0], 'start' => $row[1], 'end' => $row[2], 'Habilitado' => $hab);
    
}

$pdf->ezText($titulo, 16);
$pdf->ezText("\n\n", 10);
$pdf->ezText('Fecha: ' . date("d/m/y"), 10);
$pdf->ezText('Hora: ' . date("H:i", time() - 14400), 10);
$pdf->ezText("\n\n", 10);
$pdf->ezTable($data, $cabecera, '', $opcion);
$pdf->ezStream();
?>