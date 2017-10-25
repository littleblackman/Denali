<?php $user = new UserSession();?>
<?php ($user->getRole() == 'ADMIN') ? $class = "navbar-default" : $class = "navbar-inverse";?>
<nav class="navbar <?php echo $class;?> ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Billet simple pour l'Alaska</a>
        </div>
        div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="Home">Accueil</a></li>
              <!--<li><a href="Register">S'inscrire</a></li>-->
              <?php if($user->getRole() == 'ADMIN):?>
                  <li><a href="Dashboard">Tableau de bord</a></li>
                  <li><a href="CreateArticle">Nouveau chapitre</a></li>
                  <li><a href="Logout">Quitter</a></li>
              <?php else :?>
                   <li><a href="Loging">Se connecter</a></li>
              <?php endif;?>
            </ul>
        </div>
      </div>
</nav>
