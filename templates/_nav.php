<?php
if(!isset($_SESSION))
{
    session_start();
}
$session = new UserSession();
if(isset($_SESSION['user']))
{
$session->setUserName($_SESSION['user']);
$session ->getName($session);
}
?>
<?php if($session ->getName($session) == false)
{ ?><nav class="navbar navbar-inverse ">
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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="Home">Accueil</a></li>
            <li><a href="Login">Se connecter</a></li>
              <?php } else
              { ?>
              <nav class="navbar navbar-default ">
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
                      <div id="navbar" class="collapse navbar-collapse">
                          <ul class="nav navbar-nav">
              <li><a href="Home">Accueil</a></li>
              <li><a href="Register">S'inscrire</a></li>
              <li><a href="Dashboard">Tableau de bord</a></li>
              <li><a href="CreateArticle">Nouveau chapitre</a></li>
              <li><a href="Logout">Quitter</a></li>
              <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>