		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li class="root-level">
				<a href="<?php echo $rootsite; ?>index.php">
					<i class="entypo-gauge"></i>
					<span>Accueil</span>
				</a>
			</li>
			<li>
				<a href="<?php echo $rootsite; ?>/contact.php?iduser=<?php echo $donnees_login['iduser']; ?>">
					<i class="entypo-bell"></i>
					<span>Support Client</span>
				</a>
			</li>
		</ul>