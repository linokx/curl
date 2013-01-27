<div id="form">
	<form method="post" action="<?php echo site_url(); ?>index.php/annonce/ajouter">
		<label for="url">http://</label><input name="url" id="url"/><input type="submit" value="Analyser"/>
	</form>
</div>
<?php
	if(isset($titre)):
		?>
	<div class="resultat">
		<h2><a title="<?php echo $url; ?>" href="<?php echo $url; ?>"><?php echo $titre; ?></a></h2>
		<?php
		if(is_string($image)){
			echo $image;
		}
		else
		{
			?>
			<div class="slider">
			<ul>
				<?php
			for($i=0; $i<=3 and $i<=sizeof($image[0]); $i++):
				$img = $image[$i];
				$img[0] = preg_replace('#^[^http]/*(.*)$#', $url.'/'.$img[0], $img[0]);
				echo '<li><img src="'.$img[0].'" /></li>';
			endfor;
			?>
		</ul>
	</div>
		<p><?php echo  $texte; ?></p>
			<?php
		}
	?>
	</div>
	<?php
	endif;
	?>