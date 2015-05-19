<?php	
	require("conf/config.php");
	require("header.html");
	include('include/nav.php');
	
	extract($_GET);
	if (!isset($_GET['pg'])) $pg ="accueil";

	if(isset($_GET)):
		if (file_exists('script/'.$pg.'.php')) {
			$page = $pg.".html";
		}else{
			$page = "traitement.php";
		}
		if (file_exists('layout/'.$pg.'.html')) {
			$page = $pg.".html";
		}else{
			$page = "404.html";
		}
	else:
		$page = "accueil.html";
	endif;
	include('layout/'.$page);
	require("footer.html");