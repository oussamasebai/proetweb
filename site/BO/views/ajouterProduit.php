<?php
include "../entities/Produit.php";
include "../core/ProduitC.php";

if(isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prix'])and isset($_POST['img']) and isset($_POST['categories'])) {
$produit1=new produit ($_POST['id'], $_POST['nom'], $_POST['prix'], $_POST['img'],$_POST['categories']);
$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
}
else
{
echo "verifier le champs";
}
header('location: Index.php')
?>