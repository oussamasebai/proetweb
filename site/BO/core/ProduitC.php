<?php
include "../../config.php";
class ProduitC
{
    function afficherProduit($produit)
    {
        echo "id: " . $produit->getId() . "<br>";
        echo "Nom: " . $produit->getNom() . "<br>";
        echo "Prix: " . $produit->getPrix() . "<br>";
    }

    function ajouterProduit($produit)
    {
        $sql = "insert into produit (id,nom,prix,img,categories) values (:id, :nom, :prix, :img, :categories)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $id = $produit->getId();
            $nom = $produit->getNom();
            $prix = $produit->getPrix();
            $img = $produit->getImg();
            $categories= $produit->getCategories();
            $req->bindValue(':id', $id);
            $req->bindValue('nom', $nom);
            $req->bindValue('prix', $prix);
            $req->bindValue('img', $img);
            $req->bindValue('categories', $categories);

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficherProduits()
    {
        $sql = "SElECT * From produit ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }

    }

    function suprimerProduit($id)
    {
        $sql = "DELETE FROM produit where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
            // header('Location: index.php');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierProduit($produit, $id)
    {
        $sql = "UPDATE produit SET id=:idd , nom=:nom , prix=:prix , img=:img , categories=:categories WHERE id=:id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $idd = $produit->getId();
            $nom = $produit->getNom();
            $prix = $produit->getPrix();
            $img = $produit->getImg();
            $categories = $produit->getCategories();
            $datas = array(':idd' => $idd, ':id' => $id, ':nom' => $nom, ':prix' => $prix, ':img' =>$img, ':categories' =>$categories);
            $req->bindValue(':idd',$idd);
            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prix', $prix);
            $req->bindValue(':img',$img);
            $req->bindValue(':categories',$categories);

            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            print_r($datas);
        }
    }
    function recupareProduit($id){
        $sql="SELECT * from produit where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercher($id,$nom,$prix,$img,$categories)
    {
        $sql=" SELECT * FROM produit where id=:id and nom=:nom and prix=:prix and img=:img and categories=:categories";
    }
}
?>