<?php
//import donnée post
$iduser = $_POST['iduser'];
$login = $_POST['login'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse1 = $_POST['adresse1'];
$adresse2 = $_POST['adresse2'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$port = $_POST['port'];
$mail = $_POST['mail'];



mysql_connect("mysql51-66.pro", "lsiinforclient", "1992maxime");
mysql_select_db("lsiinforclient");
$error_sql = mysql_error();

mysql_query("UPDATE membre SET login='$login' ,nom='$nom', prenom='$prenom', adresse1= '$adresse1', adresse2='$adresse2', cp='$cp', ville='$ville', tel='$tel', fax='$fax', port='$port', email='$mail' WHERE iduser=".$iduser);
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Modifier vos informations</h2>
		<div class="row">
	
			<h3>Votre demande de modification a bien été pris en compte.</h3>
		
			<a href="<?php echo $rootsite; ?>">
			<button class="btn btn-blue btn-icon" type="button">
				Retour à la page d'accueil
				<i class="entypo-home"></i>
			</button>
			</a>
		</div>
	</div>


<br />

<!-- lets do some work here... --><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
		
	</div>




	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>