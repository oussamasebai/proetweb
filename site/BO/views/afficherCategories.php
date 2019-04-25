<?php
include "../core/CategoriesC.php";
$cat1C=new CategoriesC();
$listeCategories=$cat1C->affichercategories();
?>
<table border="2">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>prix</td>
        <td>image</td>
        <td>modifier</td>
        <td>supprimer</td>
    </tr>
    <?php
    foreach($listeCategories as $row)
    {
        ?>
        <tr>
            <td><?PHP echo $row['id']; ?></td>
            <td><?php echo $row['nom']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
