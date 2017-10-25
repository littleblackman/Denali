<?php ob_start(); ?>
<header>
	<article>
	    <h2><?php echo $article->getTitre(); ?></h2>
	    <p><?php echo $article->getText(); ?></p>
    </article>
    	<hr>
</header>
<section id = "Commentaires">
	<div class="well well-lg">
		<h3> Commentaires</h3>
				<?php if(isset($commentaires) AND (!empty($commentaires)))
                {
                    foreach  ($commentaires as $commentaire):?>
                        <article>
                            <p><strong>Le <?php echo date('d/m/y à H:i:s', strtotime($commentaire->getDateCommentaire())); ?> </strong></p>
                            <p> <strong><?php echo $commentaire->getUsername() ?> :</strong> "<?php echo $commentaire->getCommentaire() ?>"</p>
                            <a  class ="btn btn-warning btn-sm" href ="Report?id=<?php echo $commentaire->getIdCommentaire()?>">Signaler</a>
                        </article>
                    <?php endforeach;
                }?>
	</div>
		    <hr>
	<div class="well well-lg">
				<?php if(empty($commentaires)): ?>
				 	 <p><strong> Il n'y a pas encore de commentaire pour cette partie. <br/> Soyez le premier à commenter :</strong></p>
				<?php endif; ?>
	</div>
</section>  
<div class="panel panel-primary">
	<div class="panel-heading">
		<p id="Commenter"> Commenter
	</div>
	<div class="panel-body">
		     <form action ="InsertComments" method="POST" ><br/>
		     <input type="hidden" name="id" value="<?php echo $idArticle?>"/>
		     <label for="titre"> Pseudo </label> : <br/>
             <input type = "text" name ="username" id="username" /> <br/>
		     <label for="texte"> Commentaires </label> : <br/>
             <textarea name="commentaire" id="commentaire" rows="2" cols="135"/></textarea><br/>
			 <button type="submit" class="btn btn-primary btn-xs">commenter</button><br/>
             </form>
	    </p>
	 </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 