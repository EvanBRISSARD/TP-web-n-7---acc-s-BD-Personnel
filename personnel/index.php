<?php 
include_once('includes/header.inc.php');
require_once('includes/fonctionsBD.inc.php');
?>
<section>
<article>
<h1 class='titre'>Tableau des employés</h1>
		
    <?php
	  $employes = getEmployes(); // TODO : modifier la fonction getEmployes() du fichier fonctionsBD.inc.php pour qu'elle récupère les employés depuis la BD
	// si il n'y a pas d'employé , on affiche un message à la place d'un tableau vide
    if (empty($employes)) :
    ?>
      <div class="alert alert-info text-center" role="alert">
        Aucun employé enregistré.
        <a href="formAjoutEmploye.php" class="alert-link">Ajouter un employé</a>
      </div>
    <?php else : // il y a des employés dans $employes ?>

      <div>
        <table class="table table-bordered border-primary my-3">
          <thead class="table-light">
            <tr class="p-1">
              <th class="px-3">Matricule</th>
              <th class="px-3">Nom</th>
              <th class="px-3"S>Prénom</th>
            </tr>
          </thead>
          <tbody>
            <?php
			// TODO : remplacer le echo par une boucle qui parcourt le tableau $employes pour afficher le matricule, le nom et le prénom de chaque employé
			echo	'<TR><TD colspan="3">TODO : afficher le matricule, le nom et le prénom de chaque employé</TD></TR>';





			?>
          </tbody>
        </table>
		 <?php
      // Affichage du nombre d'employés
      $count = count($employes); 
	  $label = ($count > 1) ? 'employés' : 'employé'; 
      echo "<p class='employee-count'>Total : <strong>$count</strong> $label</p>";
      ?>

    <?php endif; ?>
</article>
</section>
<?php include_once('includes/footer.inc.php'); ?>
</body>
</HTML>
