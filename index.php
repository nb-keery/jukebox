<?php	
	require("conf/config.php");
	require("script/traitement.php");
	require("header.html");
	
	extract($_GET);
	if (!isset($_GET['pg'])) $pg ="accueil";

	if(isset($_GET)):
		if (file_exists('layout/'.$pg.'.php')) {
			$page = $pg.".php";
		}else{
			$page = "404.php";
		}
	else:
		$page = "accueil.php";
	endif;
	include('layout/'.$page);
	require("footer.html");