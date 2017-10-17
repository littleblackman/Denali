<?php ob_start(); ?>
<section id = "Chapitres">
    <div class="well well-lg">
        <h3>Acces aux chapitres</h3>
            <ul>
                <?php foreach ($articles as $article): ?>
                    <article>
                        <p><?php echo $article->getTitre(); ?></p>
                        <a  class ="btn btn-warning btn-sm" href ="EditArticle?id=<?php echo $article->getId_article() ?>">Modifier </a>
                        <a  class ="btn btn-warning btn-sm" href ="Delete?id=<?php echo $article->getId_article() ?>">Supprimer</a>
                    </article>
                <?php endforeach ?>
            </ul><hr>
    </div>
    <hr>
</section>
<section id = "Commentaires">
    <div class="well well-lg">
        <h3> Commentaires publiés</h3>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <article>
                        <p><?php echo $comment->getUsername();?></p>
                        <p><?php echo  $comment->getCommentaire();?></p>
                        <a  class ="btn btn-warning btn-sm" href ="ValidateComment?id=<?php echo $comment->getIdCommentaire()?>">Valider</a>
                        <a  class ="btn btn-warning btn-sm" href ="DelComment?id=<?php echo $comment->getIdCommentaire()?>">Supprimer</a>
                    </article>
                <?php endforeach ?>
            </ul>
    </div>
    <hr>
</section>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 
 