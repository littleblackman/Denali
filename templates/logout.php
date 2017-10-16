<?php ob_start(); ?>
    <div class="alert alert-dismissible alert-success">
        <h4> <?php echo $_SESSION['flash']['success'];?></h4>
    </div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 