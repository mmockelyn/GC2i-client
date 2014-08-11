<?php
include ('inc/header.php');
include ('inc/sidebar.php');
date_default_timezone_set('EUROPE/LONDON');
$date = date('d/m/Y');
?>

				
				
	</div>	
	<div class="main-content">
		
<?php include ('inc/headerbar.php'); ?>

<hr />

<br />
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title"><h3><i class="entypo-keyboard"></i> Vos Interventions Informatique</h3></div>
	</div>
		<?php
			mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
			mysql_select_db("lsiinforinter");
			$sql_inter = mysql_query("SELECT * FROM intervention WHERE idclient = ".$donnees_login['idclient']);
		?>
	<div class="panel-body with-table"><table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Matériel</th>
				<th>Date</th>
				<th>Etat de L'intervention</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
			while($donnees_inter = mysql_fetch_array($sql_inter))
			{
		?>
			<tr>
				<td><?php echo $donnees_inter['idintervention']; ?></td>
				<td>
				<?php echo $donnees_inter['categorie_materiel']; ?> <?php echo $donnees_inter['marque_materiel']; ?> <?php echo $donnees_inter['modele_materiel']; ?>
				</td>
				<td><?php echo $donnees_inter['date_entre']; ?></td>
				<td>
					<?php 
						if($donnees_inter['etat_intervention'] == 1){echo "<div class='progress'><div style='width: 33%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-danger'><span class='sr-only'>20% Complete</span></div></div><br><font color=red><center>Non vue</center></font>";}
						if($donnees_inter['etat_intervention'] == 2){echo "<div class='progress'><div style='width: 66%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-warning'><span class='sr-only'>20% Complete</span></div></div><br><font color=yellow><center>En cours...</center></font>";}
						if($donnees_inter['etat_intervention'] == 3){echo "<div class='progress'><div style='width: 100%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-success'><span class='sr-only'>20% Complete</span></div></div><br><font color=green><center>Terminé - Résolue</center></font>";}
						if($donnees_inter['etat_intervention'] == 4){echo "<div class='progress'><div style='width: 100%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-success'><span class='sr-only'>20% Complete</span></div></div><br><font color=blue><center>Terminé - Non résolue <a href=javascript:; onclick=jQuery('#modal-1').modal('show'); class=btn btn-default>En Savoir plus...</a></center></font>";}
						

					?>
				</td>
				<td>
					<?php
						if($donnees_inter['etat_intervention'] <= 2)
						{
					?>
					<a href="https://inter.lsiinformatique.fr/pdf/fiche_entre.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-print"></i>
						Imprimer le bon d'entrée
					</a><br>
					<a href="https://inter.lsiinformatique.fr/pdf/point_detaille.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left" disabled>
						<i class="entypo-print"></i>
						Imprimer le Point détaillé
					</a><br>
					<a href="https://inter.lsiinformatique.fr/pdf/facture_intervention.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left" disabled>
						<i class="entypo-print"></i>
						Imprimer la facture
					</a>
					<?php } ?>
					<?php
						if($donnees_inter['etat_intervention'] >= 3)
						{
					?>
					<a href="https://inter.lsiinformatique.fr/pdf/fiche_entre.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-print"></i>
						Imprimer le bon d'entrée
					</a><br>
					<a href="https://inter.lsiinformatique.fr/pdf/point_detaille.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-print"></i>
						Imprimer le Point détaillé
					</a><br>
					<a href="https://inter.lsiinformatique.fr/pdf/facture_intervention.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>" class="btn btn-default btn-sm btn-icon icon-left" disabled>
						<i class="entypo-print"></i>
						Imprimer la facture
					</a>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<?php
	mysql_close();
	?>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title"><h3><i class="entypo-phone"></i> Vos Interventions Mobile</h3></div>
	</div>
		<?php
			mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
			mysql_select_db("lsiinforinter");
			$sql_inter = mysql_query("SELECT * FROM mobile, client WHERE mobile.idclient = client.idclient AND mobile.idclient = ".$donnees_login['idclient']);

		?>
	<div class="panel-body with-table"><table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Materiel</th>
				<th>Date</th>
				<th>Etat de l'intervention</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
			while($donnees_inter = mysql_fetch_array($sql_inter))
			{
		?>
			<tr>
				<td><?php echo $donnees_inter['idinterventionmobile']; ?></td>
				<td>
					Materiel: <?php echo $donnees_inter['materiel']; ?><br>
					Marque: <?php echo $donnees_inter['marque']; ?><br>
					Serie: <?php echo $donnees_inter['serie']; ?><br>
					N° Série: <?php if($donnees_inter['num_serie'] == ""){echo "Non Renseigné";}else{echo $donnees_inter['num_serie'];} ?><br>
					N° Imei: <?php if($donnees_inter['num_imei'] == ""){echo "Non Renseigné";}else{echo $donnees_inter['num_imei'];} ?>

				</td>
				<td>
					<?php echo $donnees_inter['date']; ?>
				</td>
				<td>
					<?php 
						if($donnees_inter['etat_intervention'] == 1){echo "<div class='progress'><div style='width: 16%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-danger'><span class='sr-only'>20% Complete</span></div></div><br><font color=red><center>Pris en charge par un technicien</center></font>";}
						if($donnees_inter['etat_intervention'] == 2){echo "<div class='progress'><div style='width: 32%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-warning'><span class='sr-only'>20% Complete</span></div></div><br><font color=yellow><center>Pris en Charge par le sous Traitant</center></font>";}
						if($donnees_inter['etat_intervention'] == 3){echo "<div class='progress'><div style='width: 48%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-warning'><span class='sr-only'>20% Complete</span></div></div><br><font color=yellow><center>En cours d'intervention</center></font>";}
						if($donnees_inter['etat_intervention'] == 4){echo "<div class='progress'><div style='width: 64%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-warning'><span class='sr-only'>20% Complete</span></div></div><br><font color=yellow><center>Retour chez LSI informatique en cours...</center></font>";}
						if($donnees_inter['etat_intervention'] == 5){echo "<div class='progress'><div style='width: 80%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-warning'><span class='sr-only'>20% Complete</span></div></div><br><font color=yellow><center>Résolue, en Attente du client</center></font>";}
						if($donnees_inter['etat_intervention'] == 6){echo "<div class='progress'><div style='width: 100%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='20' role='progressbar' class='progress-bar progress-bar-success'><span class='sr-only'>20% Complete</span></div></div><br><font color=green><center>Intervention Terminé</center></font>";}
					?>
				</td>
				<td>

				<a href="<?php echo $rootsite; ?>pdf/fiche_mobile.php?idinterventionmobile=<?php echo $donnees_inter['idinterventionmobile']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Imprimer la Fiche
				</a>
			</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<?php
	mysql_close();
	?>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title"><h3><i class="entypo-doc-text"></i> Vos Contrat</h3></div>
	</div>
		<?php
			mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
			mysql_select_db("lsiinforinter");
			$sql_inter = mysql_query("SELECT * FROM contrat, client WHERE contrat.idclient = client.idclient AND contrat.idclient = ".$donnees_login['idclient']);

		?>
	<div class="panel-body with-table"><table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Date d'ouverture du contrat</th>
				<th>Date de cloture du contrat</th>
				<th>Type de Contrat</th>
				<th>Etat du contrat</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
			while($donnees_inter = mysql_fetch_array($sql_inter))
			{
		?>
			<tr>
				<td><?php echo $donnees_inter['idcnt']; ?></td>
				<td><?php echo $donnees_inter['date_contrat']; ?></td>
				<td><?php echo $donnees_inter['date_fin_contrat']; ?></td>
				<td>
					<?php
						if($donnees_inter['type_cnt'] == 1){echo "Contrat First";}
						if($donnees_inter['type_cnt'] == 2){echo "Contrat Premium";}
						if($donnees_inter['type_cnt'] == 3){echo "Contrat Performance";}
						if($donnees_inter['type_cnt'] == 9){echo "Contrat Professionnel";}
					?>
				</td>
				<td>
					<?php 
						if($donnees_inter['etat_cnt'] == 1){echo "Créer";}
						if($donnees_inter['etat_cnt'] == 2){echo "Signer";}
						if($donnees_inter['etat_cnt'] == 3){echo "En Cours";}
						if($donnees_inter['etat_cnt'] == 4){echo "A renouveller";}
						if($donnees_inter['etat_cnt'] == 5){echo "Cloturer";}
						if($donnees_inter['etat_cnt'] == 9){echo "Annuler";}
					?>
				</td>
				<td>
					<?php
						if($donnees_inter['etat_cnt'] == 1){
					?>

				<a href="<?php echo $rootsite; ?>/core/main/cnt/signer.cnt.php?idcnt=<?php echo $donnees_inter['idcnt']; ?>" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Signer le contrat numériquement
				</a>

				<a href="<?php echo $rootsite; ?>pdf/recap_cnt.php?idcnt=<?php echo $donnees_inter['idcnt']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Imprimer le récapitulatif du contrat
				</a>

					<?php }else{ ?>

				<a href="<?php echo $rootsite; ?>pdf/recap_cnt.php?idcnt=<?php echo $donnees_inter['idcnt']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Imprimer le récapitulatif du contrat
				</a>
				<?php } ?>
			</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<?php
	mysql_close();
	?>
</div>


<br />

<br />


<script type="text/javascript">
	// Code used to add Todo Tasks
	jQuery(document).ready(function($)
	{
		var $todo_tasks = $("#todo_tasks");
		
		$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
		{
			if(ev.keyCode == 13)
			{
				ev.preventDefault();
				
				if($.trim($(this).val()).length)
				{
					var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
					$(this).val('');
					
					$todo_entry.appendTo($todo_tasks.find('.todo-list'));
					$todo_entry.hide().slideDown('fast');
					replaceCheckboxes();
				}
			}
		});
	});
</script>


</div>
<!-- Footer -->
<footer class="main">
	
		
	&copy; 2013 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>


<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Basic Modal</h4>
			</div>
			
			<div class="modal-body">
				<center><img src="attention.png" /></center>
				Votre intervention à bien été réaliser mais des information supplémentaire doivent etre donnée par le technicien ou par le client quand à l'utilité du matériel en réparation.<br>
				Prenez contact avec nous par l'intermédiaire de ce site (Espace client --> Contacter la société) ou notre technicien va bientôt prendre contact avec vous.<br><br>
				Merci.
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-red" data-dismiss="modal">Quitter</button>
			</div>
		</div>
	</div>
</div>


	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>

</body>
</html>