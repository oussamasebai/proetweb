<?php

include "../config.php";
class CompetitionC
{
     function ajouterCompetition($competition)
 {
     $sql = "insert into competition (nom,nom_c_s,heure,date,cout,type) values (:nom, :nom_c_s, :heure, :cout, :type)";
     $db = config::getConnexion();
     try {
         $req = $db->prepare($sql);
         $nom = $competition->getNom();
         $nom_c_s = $competition->getNom_c_s();
         $heure = $competition->getHeure();
         $date = $competition->getDate();
         $cout = $competition->getCout();
         $type = $competition->getType();
         $req->bindValue('nom', $nom);
         $req->bindValue('nom_c_s',$nom_c_s);
         $req->bindValue('heure', $heure);
         $req->bindValue('date', $date);
         $req->bindValue('cout', $cout);
         $req->bindValue('type', $type);

         $req->execute();
     } catch (Exception $e) {
         echo 'Erreur: ' . $e->getMessage();
     }
}
function afficherCompetition()
{
    $sql = "SElECT * From competition ";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}
}