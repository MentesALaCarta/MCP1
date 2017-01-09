<?php

session_start();

if(!isset($_SESSION['id']) || isset($_SESSION['cargo']) && $_SESSION['cargo'] == 2){
  header('Location: ?view=error');
}else{

  require_once('core/mpdf/mpdf.php');
  require_once('model/reporte.php');

  $mpdf = new mPDF('c', 'A4');
  $reporte = new reporte();
  $reporte -> conectar();

  $html = $reporte -> infoGeneral($_GET['id']);

  $html .= $reporte -> experiencia($_GET['id']);

  $html .= $reporte -> aptitudes($_GET['id']);;

  $html .= $reporte -> brain($_GET['id']);

  $html .= $reporte -> dichos($_GET['id']);

  $reporte -> cerrar();
  $materialize = file_get_contents('css/materialize.min.css');
  $css = file_get_contents('css/materialize.css');
  $style = file_get_contents('css/style.css');
  $mentes = file_get_contents('css/mentes.css');

  $mpdf -> writeHTML($materialize, 1);
  $mpdf -> writeHTML($css, 1);
  $mpdf -> writeHTML($style, 1);
  $mpdf -> writeHTML($mentes, 1);

  $mpdf -> writeHTML($html);

  $mpdf -> Output('reporte.pdf', 'I');

}

?>
