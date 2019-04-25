<?php
include "../config.php";
include "compteC.php";
class CompteEpargne
{
 function  ajouterCompteEpargne($compteEpargne)
 {
     $sql="insert into compte(numCompte,solde,type,tauxinteret) values (:numCompte, :solded, :type , :tauxinteret)";
     $bd = config::getConnexion();
     try
     {$req=$bd->prepare($sql);
         $numCompte=$compteEpargne->getnumCompte();
         $solde=$compteEpargne->getsolde();
         $type=$compteEpargne->gettype();
         $tauxinteret=$compteEpargne->gettauxinteret();
         $req->bindValue('numCompte',$numCompte);
         $req->bindValue('solde',$solde);
         $req->bindValue('type',$type);
         $req->execute();
     }
     catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();


     }
 }
}
?>