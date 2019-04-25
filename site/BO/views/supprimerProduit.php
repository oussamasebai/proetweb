<?php
include "../core/ProduitC.php";
$produitC=new ProduitC();
if(isset($_POST["id"]))
{
    $produitC->suprimerProduit($_POST["id"]);
    header('location: Index.php');
}
?>