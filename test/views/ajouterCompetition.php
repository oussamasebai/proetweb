<?php
include "../core/CompetitionC.php";
include "../entities/competition.php";

    $competition1=new competition ($_POST['nom'], $_POST['nom_c_s'], $_POST['heure'],$_POST['date'],$_POST['cout'],$_POST['type']);
    $competition1c=new CompetitionC();
    $competition1c->ajouterCompetition($competition1);
    header('location :afficherComp.php');

?>