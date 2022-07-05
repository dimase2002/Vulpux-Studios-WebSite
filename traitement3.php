<?php
include ("connexion.php");

$idcom=connexpdo('Airport','myparam');
$reqprep=$idcom->prepare("SELECT Typeavion, NbtVol, Comp From Pilote, Compagnie WHERE ChefPil='oui' GROUP BY NOM");

$reqprep->bindParam(':idPil',$pilote,PDO::PARAM_INT);
$reqprep->bindValue(':idComp',$compagnie,PDO::PARAM_STR);
$reqprep->execute();

$reqprep->bindColumn('Typeavion',$plane);
$reqprep->bindColumn('Comp',$comp);
$reqprep->bindColumn('NbtVol',$nbtvol);
while($result=$reqprep->fetch(PDO::FETCH_BOUND))
{
  echo '<table id="result">
  <tbody>
  <tr>
   <td>'.$comp.'</td>
   <td>'.$nbtvol.'</td>
   <td>'.$plane.'</td>
  </tr>
  </tbody>
  </table>';
}
$reqprep->closeCursor();
$idcom=null;
?>