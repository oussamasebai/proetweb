<?php
include "../core/ProduitC.php";
$Produit1C=new ProduitC();
$listeProduit=$Produit1C->afficherProduits();
?>

    <?php
    foreach($listeProduit as $row)
    {
        ?>

          <div > <?php echo $row['nom']; ?></div>
           <div> <?php echo $row['prix']; ?></div>
            <div> <?php echo $row['img']; ?></div>

        <?php
    }
    ?>

