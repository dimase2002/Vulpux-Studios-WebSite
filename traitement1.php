<?php
include ("connexion.php");

$idcom=connexpdo('Airport','myparam');
$reqprep=$idcom->prepare("SELECT Nom, NbtVol, ville From Pilote, Compagnie WHERE ChefPil='oui' GROUP BY NOM");
$reqprep->execute();

$reqprep->bindColumn('Nom',$nom);
$reqprep->bindColumn('ville',$Ville);
$reqprep->bindColumn('NbtVol',$nbtvol);
echo "<h3>il y a ",$reqprep->rowCount()," reponses </h3>";
while($result=$reqprep->fetch(PDO::FETCH_BOUND))
{
  echo "<table>";
  echo "<tbody>";
  echo "<tr>";
  echo  "<td>".$nom."</td>";
  echo  "<td>".$nbtvol."</td>";
  echo  "<td>".$Ville."</td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
}
$reqprep->closeCursor();
$idcom=null;
?>
