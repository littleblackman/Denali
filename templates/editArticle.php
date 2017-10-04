<?php
include_once ('_head.php');
include_once ('_nav.php');
?>
<header>
    <h1> Billet simple pour l'Alaska</h1>
    <h2> par <br/> Jean Forteroche</h2>
</header>
<div class="panel panel-primary">
    <div class="panel-heading">
    		<p id="Publier">
    </div>
    <div class="panel-body">
            <form action ="Update.php" method = "POST"> <!-- formulaire pour l'ecrivain-->
                <label for="titre"> Titre </label> : <textarea name ="titre" id="titre" cols="135"> <?php echo $article->getTitre(); ?> </textarea> <br />
                <label for="text"> Texte </label> :  <textarea name ="text" id="text" rows="25" cols="135" > <?php echo $article->getText(); ?> </textarea> <br />
                <input type="hidden" name="id_article" value = "<?php echo $article->getId_article(); ?>" >
                <button type="submit"  class="btn btn-primary btn-xs"> Mettre à jour</button><br/>
            </p>
            </form>
    </div>
</div>
<?php include_once ('_footer.php');?>
 
 

 
 