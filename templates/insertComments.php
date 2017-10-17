<?php ob_start(); ?>
<header>
    <h1> Billet simple pour l'Alaska</h1>
    <h2> par <br/> Jean Forteroche</h2>
</header>
<div class="alert alert-dismissible alert-warning">
    <h4> <?php echo $_SESSION['flash']['warning'];?></h4>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>


