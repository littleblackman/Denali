<?php ob_start(); ?>
<div class="panel panel-primary">
	<div class="panel-heading"><p id="Publier"> Publier
	</div>
	<div class="panel-body">
        <form action ="CreateArticle" method = "POST"> <!-- formulaire pour l'ecrivain-->
            <p id="introduction">
                <label for="titre"> Titre </label> : <br/> <textarea name ="titre" id="titre" cols="135" /></textarea> <br />
                <label for="text"> Texte </label> : <br/> <textarea name ="text" id="mytextarea" rows="25" cols="135"/></textarea> <br />
                <button type="submit"  class="btn btn-primary btn-xs">publier</button><br/>
            </p>
        </form>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 
 