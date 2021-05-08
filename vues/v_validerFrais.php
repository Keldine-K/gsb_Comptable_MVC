<?php
          foreach ( $lesFiches as $uneFiche ) 
		  { $nom = $uneFiche['nom']." ".$uneFiche['prenom'];}	      
?>
<h3>Fiches de frais validé de <?php echo $nom ?> :</h3> 
<div class="encadre">
    <center>
        <div class ="container">
                <table class="listeLegere">
                   <caption>
               </caption>
                     <tr>
                        <th class="date">Date de validation</th>
                        <th class='montant'>Montant</th>
                        <th class="etat">Etat</th> 
                        <th class="valider">Valider</th> 
                        <th class="pdf">Telecharger</th>
                       <?php      
                  foreach ( $lesFiches as $uneFiche ) 
                          {
                                $date = $uneFiche['date'];
                                $etat = $uneFiche['etat'];
                                $montant = $uneFiche['montantValide'];
                                $mois = $uneFiche['mois'];
                        ?>         
                     </tr>
                     <tr>
                        <td><?php echo $date ?></td>
                        <td><?php echo $montant ?></td>
                        <td><?php echo $etat?></td>
                        <td><a href="index.php?uc=suivreFrais&action=rembourser&moi1=<?php echo $mois ?>" role="button">Rembourser</a></td>
                        <td><a href="index.php?uc=suivreFrais&action=pdf&moi=<?php echo $mois ?>"><img src='images/pdf.png'></a></td>      
                     </tr>
                <?php } ?>
            </table>
        </div>
   </center>
</div>













