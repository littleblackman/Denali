<?php ob_start(); ?>
<h1>Se connecter</h1>
    <form action="Login" method="POST">
        <div class="form-group">
            <label for="">Pseudo</label>
            <input type="text" name="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for=""> Mot de passe <a href="Forget">(J'ai oublié mon mot de passe)</a></label>
            <input type="password" name="password" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 
 

 
 