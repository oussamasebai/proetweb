<?php
/**
 * Created by PhpStorm.
 * User: OUSSAMA
 * Date: 05/04/2019
 * Time: 15:05
 */
include "../config.php";
include "compteC.php";
class compteCourantC
{
    function ajouterCompteCourant($compte)
    {
       $req=parent::ajouterCompte($compte);
        try {

            $req->bindValue('type', $type);
            $req->bindValue(':tauxinteret',$type);
            return $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();

        }
    }
}
?>