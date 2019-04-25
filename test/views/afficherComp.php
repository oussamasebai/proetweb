<?php
include "../core/CompetitionC.php";
$Competition1C =new CompetitionC();
$listecompetition=$Competition1C->afficherCompetition();
?>
<table border="2">
    <tr>
        <td>Nom Competiton</td>
        <td>Nom du complexe sportif</td>
        <td>type</td>
        <td>heure</td>
        <td>date</td>
        <td>cout</td>
        <td>modifier</td>
    </tr>
    <?php
    foreach ($listecompetition as $row)
    {


    ?>

   <tr>
       <td><?PHP echo $row['nom']; ?></td>
       <td><?PHP echo $row['nom_c_s']; ?></td>
       <td><?PHP echo $row['type']; ?></td>
       <td><?PHP echo $row['heure']; ?></td>
       <td><?PHP echo $row['date']; ?></td>
       <td><form method="post" action="calculeCout.php.php">
               <input type="submit" name="cout" value="Cout">
           </form>
       </td>
       <td><a href="modifierCompetition.php?id=<?PHP echo $row['nom']; ?>">
               Modifier</a></td>
   </tr>
    <?php
    }
    ?>
</table>
