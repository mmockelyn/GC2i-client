<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/LONDON');
$date = date('d/m/Y');
?>

				
				
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />

<br />
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title"><h3><i class="entypo-keyboard"></i> Liste de vos message au support client</h3></div>
	</div>
		<?php
			mysql_connect("localhost", "root", "1992maxime");
			mysql_select_db("inter");
			$sql_inter = mysql_query("SELECT * FROM support_client WHERE login = ".$donnees_login['login']);
		?>
	<div class="panel-body with-table"><table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Date & Heure</th>
				<th>Type de Message</th>
				<th>Etat de votre message</th>
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
					<?php echo $donnees_inter['date_support']; ?> à <?php echo $donnees_inter['heure_support']; ?>
				</td>
				<td><?php echo $donnees_inter['type_bug']; ?></td>
				<td>
				</td>
				<td>
					<a href="<?php echo $rootsite; ?>core/main/support/suivi.bug.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-print"></i>
						Imprimer le bon d'entrée
					</a><br>
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


	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/raphael-min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/morris.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/toastr.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>

</body>
</html>