<a href="<?php echo site_url().'index.php/member/logout'; ?>" id="logout">Deconnexion</a>
<div id="corbeille">
	<?php if(count($annonces)): ?>
		
		<?php
			foreach($annonces as $annonce):
				?>
				<div class="bloc">
				<div class="resultat">
					
					<h2><?php echo $annonce->titre; ?></h2>
					<a class="site" title="Visiter la page de <?php echo $annonce->titre; ?>" href="<?php echo $annonce->url; ?>"><?php echo $annonce->url; ?></a>
					<p><span class="slider">
						<img src="<?php echo $annonce->photo; ?>" width="160" height="160" alt="<?php echo $annonce->titre; ?>" />
					</span><?php echo  $annonce->resume; ?></p>
					</div>
					<div class="lien">
						<span class="icon-cog-alt"> Paramètres</span>
						<div>
							<a class="retablir icon-pencil" href="<?php echo 'retablir/'.$annonce->id; ?>"> Retablir l'annonce</a>
							<a class="delete icon-trash" href="<?php echo 'effacer/'.$annonce->id; ?>"> Supprimer définitivement</a>
						</div>
					</div>
				</div>
				<?php
			endforeach;
		endif;
		?>
	</div>