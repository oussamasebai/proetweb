<?php
include "../config.php";
class compteC
{

    function ajouterCompte($compte)
    {
        $sql = "insert into compte(numCompte,solde,type,tauxinteret) values (:numCompte, :solded, :type, :tauxinteret )";
        $bd = config::getConnexion();
        try {
            $req = $bd->prepare($sql);

            $numCompte = $compte->getNumCompte();
            $solde = $compte->getSolde();
            $type = $compte->getType();
            $req->bindValue('numCompte', $numCompte);
            $req->bindValue('solde', $solde);
            $req->bindValue('type', $type);
            return $req;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();


        }
    }
}
?>