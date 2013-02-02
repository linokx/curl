<a href="<?php echo site_url().'index.php/member/logout'; ?>" id="logout">Deconnexion</a>
	<div class="apercu">
		<h2><?php echo $titre; ?></h2>
		<a class="site" title="Visiter la page de <?php echo $titre; ?>" href="<?php echo $url; ?>"><?php echo $url; ?></a>
		<label>Cliquer sur l'image qui servira d'apercu <span>(L'image ne sera pas deformée lors de l'apercu)</span></label>
		
			<div class="slider">
			<ul>
				<?php
			/*for($i=0; $i<$lenght; $i++):
				$img = $image[$i];
				$img = preg_replace('#^[^http]/*(.*)$#', $url.'/'.$img, $img);
				echo '<li><img src="'.$img.'" /></li>';
			endfor;*/
			$images = explode(';',$DBimage);
			foreach($images as $img):
				$class = ($img == $photo) ? "class='choix'" : '';
				echo '<li '.$class.' ><img src="'.$img.'" width="160" height="160"/></li>';
			endforeach;
			?>
		</ul>
		</div>
		<label>Vous pouvez modifier la description</label>
		<?php 
		echo form_open('index.php/annonce/modifier',array('method'=>'post'));
		?>
				<textarea rows="10" name="fResume"><?php echo $resume; ?></textarea>
		<?php
		$fIdInput = array(
					'name' => 'fId',
					'type' => 'hidden',
					'value' => $id
					);
		echo form_input($fIdInput);
		$fUrlInput = array(
					'name' => 'fUrl',
					'type' => 'hidden',
					'value' => $url
					);
		echo form_input($fUrlInput);		
		$fTitreInput = array(
					'name' => 'fTitre',
					'type' => 'hidden',
					'value' => $titre
					);
		echo form_input($fTitreInput);
		$fImageInput = array(
					'name' => 'fImage',
					'type' => 'hidden',
					'value' => $photo
					);
		echo form_input($fImageInput);
		$fDBImageInput = array(
					'name' => 'fDBImage',
					'type' => 'hidden',
					'value' => $DBimage
					);
		echo form_input($fDBImageInput);
		echo form_submit('check','Enregistrer');
		echo form_close();?>
	<a href="<?php echo site_url();?>" class="annuler">Annuler</a>
	</div>