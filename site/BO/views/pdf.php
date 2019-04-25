<?php
include "../entities/fpdf.php";
//creation de l'objet pdf
$pdf=new FPDF();

//Titres des colonnes
$pdf->SetFont('Arial','',12);

//add page crée une nouvelle page.
$pdf->AddPage();

$resul_nom = mysql_query('SELECT id,nom FROM salarie WHERE id_salarie = '.$id.'') or die ("requête impossible" . mysql_error());
$row_nom = mysql_fetch_row($resul_nom);
$pdf->Cell("","",$row_nom[1],"","","C");
$pdf->Ln(3);
$pdf->Image("../images/logo_reduit.JPG",10,8,33);

?>