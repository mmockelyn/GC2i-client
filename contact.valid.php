<?php
include ('inc/config.php');

mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
			mysql_select_db("lsiinforinter");

$iduser = $_POST['iduser'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$date_support = $_POST['date'];
$heure_support = $_POST['heure'];

$query = mysql_query("INSERT INTO `support_client`(`idsupport`, `idclient`, `nom`, `email`, `type_bug`, `message`, `etat_support`, `date_support`, `heure_support`) 
				VALUES (NULL,'$iduser','$nom','$mail','$contact','$message','1','$date_support','$heure_support')");	

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
		<div class="panel-title"><h3><i class="entypo-bell"></i> Contactez-nous</h3></div>
	</div>
	<div class="panel-body">
		Votre Message à bien été envoyer à notre SAV.<br><br>
		Merci.
	</div>
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