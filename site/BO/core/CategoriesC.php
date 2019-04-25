<?php
include "../../config.php";
class CategoriesC
{
    function ajoutercategories($categories)
    {

        $sql = "insert into categories (id,nom) values (:id, :nom)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $id = $categories->getId();
            $nom = $categories->getNom();
            $req->bindValue(':id', $id);
            $req->bindValue('nom', $nom);
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function affichercategories()
    {
        $sql = "SElECT * From categories ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }


    }
}
?>