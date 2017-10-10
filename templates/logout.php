<?php ob_start(); ?>
<div class="alert alert-dismissible alert-warning">
	<h4> <?php echo"vous etes maintenant déconnecté";?></h4>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
 