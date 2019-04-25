<html>
<head>
</head>
<body>
<?php
include "../entities/Produit.php";
include "../core/ProduitC.php";
if (isset($_GET['id']))
{
    $produitC=new ProduitC();
    $result=$produitC->recupareProduit($_GET['id']);
    foreach ($result as $row)
    {
        $id=$row['id'];
        $nom=$row['nom'];
        $prix=$row['prix'];
        $img=$row['img'];
?>
<form method="POST">
    <table>
        <caption>Modifier Prodiuit</caption>
        <tr>
            <td>Id</td>
            <td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
        </tr>
        <tr>
            <td>Prix</td>
            <td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
        </tr>
        <tr>
            <td>image</td>
            <td><input type="file" name="img" value="<?PHP echo $img ?>"></td>
        </tr>
        <tr>
            <td>Categories</td>
            <td>
                <select name="categories">
                    <option value="lait">lait</option>
                    <option value="electo">elecro</option>
                    <option value="alimontaire">alimontaire</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="modifier" value="modifier"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
        </tr>
    </table>
</form>
<?php
    }
}
if (isset($_POST['modifier']))
    {
      $produit=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['img'],$_POST['categories']);
      $produitC->modifierProduit($produit,$_POST['id_ini']);
      echo $_POST['id_ini'];
      header('location: Index.php');
    }

?>
</body>
</html>