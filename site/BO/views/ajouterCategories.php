<?php
include "../entities/Categories.php";
include "../core/CategoriesC.php";

if(isset($_POST['id']) and isset($_POST['nom'])) {
    $cat1=new Categories ($_POST['id'], $_POST['nom']);
    $ca1C=new CategoriesC();
    $ca1C->ajoutercategories($cat1);
}
else
{
    echo "verifier le champs";
}
header('location: grid.php')
?>