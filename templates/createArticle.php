<?php
include_once ('_head.php');
include_once ('_nav.php');
?>
<header>
    <h1> Billet simple pour l'Alaska</h1>
    <h2> par <br/> Jean Forteroche</h2>
</header>
<div class="panel panel-primary">
	<div class="panel-heading"><p id="Publier"> Publier
	</div>
	<div class="panel-body">
        <form action ="CreateArticle.php" method = "POST"> <!-- formulaire pour l'ecrivain-->
            <p id="introduction">
                <label for="titre"> Titre </label> : <br/> <textarea name ="titre" id="titre" cols="135" /></textarea> <br />
                <label for="text"> Texte </label> : <br/> <textarea name ="text" id="text" rows="25" cols="135"/></textarea> <br />
                <button type="submit"  class="btn btn-primary btn-xs">publier</button><br/>
            </p>
        </form>
    </div>
</div>
<?php include_once ('_footer.php');?>
 
 