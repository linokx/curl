<!DOCTYPE HTML>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="<?php echo site_url().CSS_DIR;?>/style.css" media="screen" />
	<title><?php echo $main_title; ?></title>
</head>
<body>
<h1><a href="<?php echo site_url(); ?>">Recherche un site</a></h1>
	<?php echo $vue; ?>

	   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo site_url().JS_DIR;?>/script.js"></script> 
    <div id="overlay"></div>
    <div id="verif"></div> 
</body>

</html>