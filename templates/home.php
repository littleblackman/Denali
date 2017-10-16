<?php ob_start(); ?>
<section>
	<h2> Présentation</h2>
		<p>Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. 
		<br/>It indicates a synchronic distortion in the areas emanating triolic waves. <br/>That's why the transporter's biofilters 
		couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium,
		highly explosive, virtually undetectable by your transporter.I haven't determined if our phaser energy can generate a stable field. 
		We could alter the photons with phase discriminators.</p>
		<hr>
</section>
<nav>
	<h3>Acces aux chapitres</h3>
		<ul>
			<?php foreach ($articles as $article): ?>
	    		<article>
	        		<p>
	        			<a href ="ReadArticle?id=<?php echo $article->getId_article() ?>">
	        														<?php echo $article->getTitre(); ?>
        				</a>
	        		</p>
	    		</article>
	    	<?php endforeach ?>	
		</ul>
</nav>
<?php $contenu = ob_get_clean(); ?>
<?php require  '_gabarit.php'; ?>