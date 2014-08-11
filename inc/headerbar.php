<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo $rootsite; ?>assets/images/avatar/<?php echo $donnees_login['images']; ?>.jpg" alt="" class="img-circle" />
					Bienvenue <?php echo $donnees_login['nom']; ?> <?php echo $donnees_login['prenom']; ?>
				</a>
				
				<ul class="dropdown-menu">
					
					<!-- Reverse Caret -->
					<li class="caret"></li>
					
					<!-- Profile sub-links -->
					<li>
						<a href="<?php echo $rootsite; ?>/core/main/info/modif.info.php?iduser=<?php echo $donnees_login['iduser']; ?>">
							<i class="entypo-user"></i>
							Editer vos informations
						</a>
					</li>
					<li>
						<a href="<?php echo $rootsite; ?>/core/main/info/modif.pass.php?iduser=<?php echo $donnees_login['iduser']; ?>">
							<i class="entypo-key"></i>
							Editer le mot de passe
						</a>
					</li>
				</ul>
			</li>
		
		</ul>
		
		<ul class="user-info pull-left pull-right-xs pull-none-xsm">

		
		</ul>
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<li class="sep"></li>
				<li>
					Version Actuel: <?php echo $version_actuel; ?>
				</li>
			
			<li class="sep"></li>
			
			<li>
				<a href="logout.php">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>