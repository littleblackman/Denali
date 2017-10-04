<?php
include_once ('_head.php');
include_once ('_nav.php');
?>
<h3>Acces aux chapitres</h3>
	<ul>
		<?php foreach ($articles as $article): ?>
	    	<article>
	        	<p><?php echo $article->getTitre(); ?></p>
	        	<a  class ="btn btn-primary btn-sm" href ="EditArticle.php?id=<?php echo $article->getId_article() ?>">Modifier </a>
	        	<a  class ="btn btn-primary btn-sm" href ="Delete.php?id=<?php echo $article->getId_article() ?>">Supprimer</a>		
	    	</article>
	    <?php endforeach ?>	
	</ul>
<?php include_once ('_footer.php');?>
 
 