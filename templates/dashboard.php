<?php ob_start(); ?>
<h3>Acces aux chapitres</h3>
	<ul>
		<?php foreach ($articles as $article): ?>
	    	<article>
	        	<p><?php echo $article->getTitre(); ?></p>
	        	<a  class ="btn btn-primary btn-sm" href ="EditArticle?id=<?php echo $article->getId_article() ?>">Modifier </a>
	        	<a  class ="btn btn-primary btn-sm" href ="Delete?id=<?php echo $article->getId_article() ?>">Supprimer</a>
	    	</article>
	    <?php endforeach ?>	
	</ul>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 
 