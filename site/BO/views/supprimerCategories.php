<?php
include "../core/CategoriesC.php";
$categoriesC=new CategoriesC();
if(isset($_POST["id"]))
{
    $produitC->suprimerCategories($_POST["id"]);
    header('location: grid.php');
}
?>