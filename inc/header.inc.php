<!Doctype html>
<html>
    <head>
        <title>Mon Site - <?= $page ?></title>
		<meta charset="UTF-8" />
        <link rel="stylesheet" href="<?= RACINE_ANNONCEO ?>css/style.css"/>
    </head>
    <body>    
        <header>
			<div class="conteneur">                      
				<span>
					<a href="<?= RACINE_ANNONCEO ?>index.php" title="Mon Site">MonSite.com</a>
                </span>
				<nav>
				
					<?php if(userConnecte()) : ?>
					<a class="<?=  ($page == 'Profil') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>profil.php">Profil</a>
					<a href="<?= RACINE_ANNONCEO ?>connexion.php?action=deconnexion">Déconnexion</a>
					<?php else :  ?>				
					<a  class="<?=  ($page == 'Inscription') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>inscription.php">Inscription</a>
					<a  class="<?=  ($page == 'Connexion') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>connexion.php">Connexion</a>
					<?php endif; ?>
					<a  class="<?=  ($page == 'Annonces') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>annonces.php">Boutique</a>
					<?php endif ?></a>

					<?php if(userAdmin()) :	?>	
					<a  class="<?=  ($page == 'Gestion Categories') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>backoffice/gestion_categories.php">Gestion Categories</a>
					<a  class="<?=  ($page == 'Gestion Membres') ? 'active' : ''  ?>" href="<?= RACINE_ANNONCEO ?>backoffice/gestion_membres.php">Gestion Membres</a>
					<a  class="<?=  ($page == 'Gestion Annonces') ? 'active' : ''  ?>"  href="<?= RACINE_ANNONCEO ?>backoffice/gestion_annonces.php">Gestion Annonces</a>
					<?php endif; ?>
					
					
				</nav>
			</div>
        </header>
        <section>
			<div class="conteneur">   