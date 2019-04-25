<?PHP
include "../entities/compte.php";
include "../core/compteC.php";
include "../core/compteCourantC.php";
include "../core/CompteEpargne.php";

if (isset($_POST['numCompte']) and isset($_POST['solde']) and isset($_POST['type']) and isset($_POST['tauxinteret'])) {
    if($_POST['type']=="CC"){
    $compte1=new compteCourantC($_POST['numCompte'],$_POST['solde'],$_POST['type']);
    $compte1C=new compteCourantC();
    $compte1C->ajouterCompteCourant($compte1);
    }
    if($_POST['type']=="CE")
    {
        $ce=new CompteEpargne($_POST['numCompte'],$_POST['solde'],$_POST['type'],$_POST['tauxinteret']);
        $core=new CompteEpargneC();
        $core=ajouterCompteEpargne(ce);
    }
}else{
    echo "vérifier les champs";
}

?>