<?php include('include/nav.php'); ?>
<h1 class="title">Musique</h1>

<div id="music">
	<div>
		<h2>Last music</h2>
		<p>Cuius ambitiosam vulgi et lacrimosum in
			sui periculi documento conculcans et audaciam
			suos documento sibi considerans unius 
			inpulsu ingravesceret imaginem subditis
			sordidioris rectoremque haec clari 
			ingravesceret iudicio similia interitum 
			formidabat addictum quod domum post imaginem 
			in recenti formidabat imperiali cuius 
			seminecem furoris exitio ut inter inflammavit
			famis et domum formidabat inflammavit imaginem</p>
		<button>Album</button>	
	</div>
	<div>
		<img src="img/dg.jpg">
	</div>

	<div>
		<ul>
			<li><i class="fa fa-backward"></i></li>
			<li><i class="fa fa-play"></i></li>
			<li><i class="fa fa-stop"></i></li>
			<li><i class="fa fa-forward"></i></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>

		<ul>
		<?php for ($i=0; $i < 6 ; $i++) { 
			echo "<li><i class='fa fa-music'></i>Nom de la musique - Chanteur</li>";
		}?>
		</ul>
	</div>
</div>