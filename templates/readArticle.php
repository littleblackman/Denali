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
				<?php foreach ($commentaires as $commentaire): ?>
					 <article>
						<p><strong>Le <?php echo date('d/m/y à H:i:s', strtotime($commentaire['date_commentaire'])); ?> </strong></p>
					    <p> <strong><?php echo $commentaire['username'] ?> : </strong></p>
					    <p><?php echo $commentaire['commentaire'] ?></p>
					 </article>
                    <form action = "Report" method= "POST">
                        <input type="hidden" name="id_commentaire" value = "<?php echo $commentaire['id_commentaire'] ?>" >
                        <button type="submit"  class="btn btn-danger btn-xs"> Signaler</button><br/>
                    </form>
				<?php endforeach ?>
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
             <textarea name="commentaire" id="commentaire" rows="10" cols="135"/></textarea><br/>
			 <button type="submit" class="btn btn-primary btn-xs">commenter</button><br/>
             </form>
	    </p>
	 </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 