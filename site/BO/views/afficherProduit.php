<?php
include "../core/ProduitC.php";
$Produit1C=new ProduitC();
$listeProduit=$Produit1C->afficherProduits();
?>
<table border="2">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>prix</td>
        <td>image</td>
        <td>categories</td>
        <td>modifier</td>
        <td>supprimer</td>
    </tr>
    <?php
    foreach($listeProduit as $row)
    {
        ?>
    <tr>
        <td><?PHP echo $row['id']; ?></td>
        <td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['prix']; ?></td>
        <td><?php echo $row['img']; ?></td>
        <td><?php echo $row['categories']; ?></td>
        <td><a href="modifierProduit.php?id=<?PHP echo $row['id']; ?>">
                Modifier</a></td>
        <td><form method="post" action="supprimerProduit.php">
                <input type="submit" name="supprimer" value="supprimer">
                <input type="hidden"value="<?PHP echo $row['id']; ?>" name="id">
            </form>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
